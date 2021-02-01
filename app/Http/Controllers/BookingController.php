<?php

namespace App\Http\Controllers;

use App\Article;
use App\Booking;
use App\Http\Requests\AccommodationForm;
use App\Http\Requests\AirportInformationForm;
use App\Http\Requests\BillingDetailsForm;
use App\Http\Requests\BookingForm;
use App\Location;
use App\Mail\BookingAdmin as BookingAdminMail;
use App\Mail\Booking as BookingMail;
use App\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;

class BookingController extends Controller
{
    //

    public function create()
    {
        $article   = Article::where('alias', 'learn-spanish-booking.html')->first();
        $locations = Location::all();
        return view('booking', compact('locations', 'article'));
    }

    /**
     *
     */
    public function billingInformation(BillingDetailsForm $request)
    {
        return response()->json(['message' => true]);
    }

    /**
     *
     */
    public function airportInformation(AirportInformationForm $request)
    {
        return response()->json(['message' => true]);
    }

    public function validateAccommodation(AccommodationForm $request)
    {
        return response()->json(['message' => true]);
    }

    public function store(BookingForm $request)
    {
        $booking        = new Booking;
        $booking->token = Str::random(30);
        $totalPagar     = 40 * $request->students;
        //$totalPagar = 0;
        $booking->students = $request->students;

        //billing information
        switch ($request->title) {
            case 1:
                $booking->title = 'Mr.';
                break;
            case 2:
                $booking->title = 'Mrs.';
                break;

            default:
                $booking->title = 'Miss.';
                break;
        }

        $booking->lname      = $request->lname;
        $booking->fname      = $request->fname;
        $booking->email      = $request->email;
        $booking->country_id = $request->country;
        $booking->address    = $request->address;
        $booking->city       = $request->city;

        //meet airport
        $booking->meetAirport    = $request->meetAirport;
        $booking->dateArrival    = date('Y-m-d', strtotime($request->dateArrival));
        $booking->timeArrival    = $request->timeArrival;
        $booking->airlineCompany = $request->airlineCompany;
        $booking->flightNumber   = $request->flightNumber;

        //payment

        $booking->payment_id = $request->payment;

        try {
            $booking->save();
        } catch (\Exception $e) {
            // do task when error
            return abort(302, $e->getMessage());
        }

        // attach options to the booking

        $priceOption = 0;

        foreach ($request->options as $key => $value) {

            $option = Option::find($value['id']);

            $nWeeks = 0;

            if (array_key_exists('weeks', $value)) {
                $nWeeks = $value['weeks'];
            }

            if ($option->price_plus && $option->available_change) {
                $price = $option->price + $option->price_plus * $nWeeks;
            } else if ($option->available_change) {
                $price = $option->price * $nWeeks;
            } else {
                $price = $option->price;
            }

            $comment = '';

            if ($request->comments && array_key_exists($key, $request->comments)) {
                $comment = $request->comments[$key];
            }

            $booking->options()->attach($value['id'], [
                'weeks'   => $nWeeks,
                'comment' => $comment,
                'from'    => date('Y-m-d', strtotime($request->dates[$key])),
                'price'   => $price,
            ]);

            $priceOption = $priceOption + $price * $booking->students;
        }

        // attach accommodations to the booking

        if (!$request->accommodations == "" && count($request->accommodations) > 0) {

            foreach ($request->accommodations as $key => $accommodation) {

                switch ($accommodation['id']) {
                    case 1:
                        $booking->accommodations()->attach($accommodation['id'], [
                            'price'     => $accommodation['price'],
                            'time'      => $accommodation['time'],
                            'startDate' => date('Y-m-d', strtotime($request->startDate)),
                            'endDate'   => date('Y-m-d', strtotime($request->endDate)),
                            'meals'     => $request->meals,
                            'bathroom'  => $request->bathroom,
                            'people'    => $request->people,
                            'type'      => $request->type,
                        ]);
                        $totalPagar = $totalPagar + $accommodation['price'];
                        break;
                    case 2:
                        $booking->accommodations()->attach($accommodation['id'], [
                            'price'     => $accommodation['price'],
                            'time'      => $accommodation['time'],
                            'startDate' => date('Y-m-d', strtotime($request->startDate)),
                            'endDate'   => date('Y-m-d', strtotime($request->endDate)),
                            'people'    => $request->people,
                            'type'      => $request->type,
                        ]);
                        $totalPagar = $totalPagar + $accommodation['price'];
                        break;
                    case 3:
                        $booking->accommodations()->attach($accommodation['id'], [
                            'price'        => 0,
                            'time'         => 0,
                            'nameHotel'    => $request->nameHotel,
                            'addressHotel' => $request->addressHotel,
                            'phoneHotel'   => $request->phoneHotel,
                        ]);
                        break;
                    case 4:
                        $booking->accommodations()->attach($accommodation['id'], [
                            'price' => $accommodation['price'],
                            'time'  => $accommodation['time'],
                        ]);
                        $totalPagar = $totalPagar + $accommodation['price'];
                        break;
                }

            }
        }

        $totalPagar = $priceOption + $totalPagar;

        if ($totalPagar == $request->total) {
            $booking->total = $request->total;
        } else {
            return abort(302, 'The value does not match with: $' . $totalPagar . ' and $' . $request->total);
        }

        try {
            $booking->save();
        } catch (\Exception $e) {
            // do task when error
            return abort(302, $e->getMessage());
        }

        Mail::to(config('mail.from.address'), config('mail.from.name'))
            ->cc(config('mail.cc.address'), config('mail.cc.name'))
            ->send(new BookingAdminMail($booking));

        Mail::to($booking->email)->send(new BookingMail($booking));

        $request->session()->put('booking', $booking->id);
        return $booking->payment->id;
    }

    /**
     * checkout your booking return a view depend method pay
     */
    public function checkout(Request $request)
    {
        $booking = Booking::find(session()->get('booking'));
        if (!$booking) {
            return redirect()->route('booking.store');
        }
        if (!is_null($booking->authorizationResult) && $booking->authorizationResult != '00') {

            // se procede a replicar ya que el payme ya ha procesado la anterior orden como erronea
            $bookingAux = $booking->replicate();

            $bookingAux->authorizationResult = null;
            $bookingAux->save();

            foreach ($booking->options as $option) {
                $bookingAux->options()->attach($option->id, [
                    'weeks'   => $option->pivot->weeks,
                    'comment' => $option->pivot->comment,
                    'from'    => $option->pivot->from,
                    'price'   => $option->pivot->price,
                ]);
            }

            foreach ($booking->accommodations as $accommodation) {
                $bookingAux->accommodations()->attach($accommodation->id, [
                    'price'        => $accommodation->pivot->price,
                    'time'         => $accommodation->pivot->time,
                    'startDate'    => $accommodation->pivot->startDate,
                    'endDate'      => $accommodation->pivot->endDate,
                    'meals'        => $accommodation->pivot->meals,
                    'bathroom'     => $accommodation->pivot->bathroom,
                    'people'       => $accommodation->pivot->people,
                    'type'         => $accommodation->pivot->type,
                    'nameHotel'    => $accommodation->pivot->nameHotel,
                    'addressHotel' => $accommodation->pivot->addressHotel,
                    'phoneHotel'   => $accommodation->pivot->phoneHotel,
                ]);
            }

            $booking = $bookingAux;

            session()->put('booking', $booking->id);

        } elseif ($booking->authorizationResult == '00') {

            return redirect()->route('student-info');

        }
        $result = '';
        try {
           // $result = $booking->wallet();
        } catch (Exception $e) {

            return abort(302, $e->getMessage());

        }

        $purchaseOperationNumber = str_pad($booking->id, 9, "0", STR_PAD_LEFT);

        $purchaseAmount = 0;

        if (substr($booking->total * 100, -2) == '00') {
            $purchaseAmount = $booking->total * 100;
        } else {

            if ($booking->total < 1) {
                $purchaseAmount = str_replace("0.", "", round($booking->total, 2));
            } else {
                $purchaseAmount = str_replace(".", "", round($booking->total, 2));
            }

        }

        $purchaseVerification = openssl_digest(config('app.payme.idacquirer') . config('app.payme.idcommerce') . $purchaseOperationNumber . $purchaseAmount . config('app.payme.purchasecurrencycode') . config('app.payme.password_pasarela'), 'sha512');

        $ruta = route('student-info');
        $ruta = chunk_split($ruta, 30, '$');
        $ruta = explode("$", $ruta);

        $article = Article::where('alias', 'learn-spanish-booking.html')->first();
        return view('booking.check', compact('article', 'booking', 'result', 'purchaseVerification', 'purchaseAmount', 'ruta'));
    }

    /**
     * Guarda los datos enviados por pay-me desde la dirección registrado con una
     * solicitud POST en el booking --> el id del booking viene registrada en
     * reserved1 y en reserved3,4,5 viene la dirección a la que debe ser redireccionada,
     * en reserved2 viene el token de seguridad para que no se pueda cambiar al menos
     * que se disponga el token
     */
    public function bookingConfirmed(Request $request)
    {
        $booking = Booking::find($request->reserved1);

        if ($booking && $request->reserved2 == $booking->token) {
            $booking->authorizationResult = $request->authorizationResult;
            $booking->errorCode           = $request->errorCode;
            $booking->errorMessage        = $request->errorMessage;
            $booking->token               = Str::random(30);

            $booking->save();
            return redirect($request->reserved3 . '' . $request->reserved4 . '' . $request->reserved5);
        } else {
            return abort(404);
        }

    }

    /**
     * Muestra la página de la segunda parte del booking es decir el student-info
     */
    public function getViewStudenInfo(Request $request)
    {
        $article = Article::where('alias', 'student-info')->first();
        if ($request->session()->has('booking')) {
            $booking = Booking::find($request->session()->get('booking'));

            if ($booking && ($booking->payment_id != 1 || $booking->authorizationResult == '00')) {

                return view($article->view, compact('article', 'booking'));

            } else {

                return redirect()->route('booking.checkout');

            }

            return redirect()->route('booking.create');
        }
        return redirect()->route('booking.create');
    }
}
