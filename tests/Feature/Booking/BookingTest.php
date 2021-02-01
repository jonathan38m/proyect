<?php

namespace Tests\Feature\Booking;

use App\Booking;
use App\Location;
use Carbon\Carbon;
use Tests\TestCase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test void
     */

    public function carga_la_pagina_bien()
    {
        $location = Location::first();
        $response = $this->get(route('booking.create'));
        $response->assertStatus(200);
        $response->assertSee(__('booking.title'));
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_booking()
    {
        //$this->withoutExceptionHandling();
        $response = $this->post(route('booking.store'), [

            'locations'            => [1, 2, 3],
            'students'             => '2',

            'options'              => [
                "20hrsWeek"      => ["weeks" => "1", "id" => 1],
                "4hrsDayOtavalo" => ["weeks" => "1", "id" => 13],
                "amazon11"       => ["weeks" => "1", "id" => 25],
            ],

            "dates"                => [
                "20hrsWeek"   => "[native Date Sun Sep 01 2019 19:12:00 GMT-0500 (Ecuador Time)]",
                "4hrsDayOtavalo" => "[native Date Sat Sep 28 2019 19:12:00 GMT-0500 (Ecuador Time)]",
                "amazon11" => "[native Date Sat Sep 28 2019 19:12:00 GMT-0500 (Ecuador Time)]",
            ],

            'title'                => '1',
            'lname'                => 'Mejía',
            'fname'                => 'Jonathan',
            'email'                => 'jonathan38m@gmail.com',
            'country'              => '1',
            'address'              => 'Av. Sancho de Escobar',
            'city'                 => 'Quito',

            'accommodation'        => "1",
            'startDate'            => Carbon::now(),
            'endDate'              => Carbon::now(),
            'meals'                => '1',
            'bathroom'             => '1',
            'people'               => '1',
            'type'                 => '1',

            'meetAirport'          => '1',
            'dateArrival'          => Carbon::now(),
            'timeArrival'          => '13:13',
            'airlineCompany'       => 'Tame',
            'flightNumber'         => '123qwe',

            'payment'              => '1',
            'terms'                => '1',

            'total'                => '2634',

            'g-recaptcha-response' => '1',

        ]);
        $response->assertOk();
        $response->assertSessionHas('booking');
        $response->assertSessionHasNoErrors();
    }

    /**
     * A basic feature test example.
     *
     * @test void
     */
    public function formulario_se_envia_correctamente_booking_2()
    {
        //$this->withoutExceptionHandling();
        $date = Carbon::now();
        date_add($date, date_interval_create_from_date_string("6 days"));

        $response = $this->post(route('booking.store'), [

            'locations'            => [1, 4],
            'students'             => '2',

            'options'              => [
                "20hrsWeek"   => ["weeks" => "1", "id" => 1],
                "galapagos11" => ["weeks" => "1", "id" => 26],
            ],

            'title'                => '1',
            'lname'                => 'Mejía',
            'fname'                => 'Jonathan',
            'email'                => 'jonathan38m@gmail.com',
            'country'              => '1',
            'address'              => 'Av. Sancho de Escobar',
            'city'                 => 'Quito',

            'accommodation'        => "2",
            'startDate'            => Carbon::now(),
            'endDate'              => $date,
            'people'               => '2',
            'type'                 => '2',

            'meetAirport'          => '1',
            'dateArrival'          => Carbon::now(),
            'timeArrival'          => '13:13',
            'airlineCompany'       => 'Tame',
            'flightNumber'         => '123qwe',

            'payment'              => '1',
            'terms'                => '1',

            "dates"                => [
                "20hrsWeek"   => "[native Date Sun Sep 01 2019 19:12:00 GMT-0500 (Ecuador Time)]",
                "galapagos11" => "[native Date Sat Sep 28 2019 19:12:00 GMT-0500 (Ecuador Time)]",
            ],

            'total'                => '8582',

            'g-recaptcha-response' => '1',

            "accommodations"       => [
                [
                    "name"  => "Student Residence with breakfast in Quito",
                    "id"    => "2",
                    "time"  => 6,
                    "price" => 228,
                ],
            ],

        ]);
        $response->assertOk();
        $response->assertSessionHas('booking');
        $response->assertSessionHasNoErrors();
    }

    /**
     * verifica que la pagina del booking en el chek out para el pago con tarjeta de crédito sea correcto la primera vez
     *
     * @test void
     */
    public function check_out_ok()
    {
        //$this->withoutExceptionHandling();
        $booking = factory(Booking::class)->create();

        $response = $this->withSession(['booking' => $booking->id])->get(route('booking.checkout'));

        $response->assertOk();

        $response->assertSessionHas('booking', $booking->id);

        $this->assertTrue(Booking::find($booking->id) ? true : false);

        $this->assertTrue(Booking::find($booking->id + 1) ? false : true);
    }

    /**
     * verifica que se crea un nuevo registro de booking ya que el pago del anterior no se pudo realizar
     *
     * @test void
     */
    public function check_out_new_booking()
    {
        $booking = factory(Booking::class)->create([
            'authorizationResult' => '01',
        ]);

        $response = $this->withSession(['booking' => $booking->id])->get(route('booking.checkout'));

        $response->assertOk();

        $response->assertSessionHas('booking', $booking->id + 1);

        $this->assertTrue(Booking::find($booking->id + 1) ? true : false);

    }

    /**
     * verifica que se crea un nuevo registro de booking ya que el pago del anterior no se pudo realizar
     * y que todos las opciones y acommodations son las mismas del anterior
     *
     * @test void
     */
    public function check_out_new_booking_with_options_and_accommodations()
    {
        //$this->withoutExceptionHandling();
        $booking = factory(Booking::class)->create([
            'authorizationResult' => '01',
        ]);

        $booking->options()->attach(1, [
            'weeks'   => 2,
            'comment' => 'gfdg',
            'from'    => now(),
            'price'   => 13.20,
        ]);

        $booking->accommodations()->attach(1, [
            'price'     => 150.00,
            'time'      => 12,
            'startDate' => now(),
            'endDate'   => now(),
            'meals'     => 3,
            'bathroom'  => 2,
            'people'    => 1,
            'type'      => 1,
        ]);

        $response = $this->withSession(['booking' => $booking->id])->get(route('booking.checkout'));

        $response->assertOk();

        $response->assertSessionHas('booking', $booking->id + 1);

        $this->assertTrue(Booking::find($booking->id + 1) ? true : false);

        $valid = true;

        $bookingNew = Booking::find($booking->id + 1);
        $booking    = Booking::find($booking->id);

        foreach ($booking->options as $option) {

            //dd($bookingNew->options->contains($option));
            if (!$bookingNew->options->contains($option)) {
                $valid = false;
                break;
            }
        }
        $this->assertTrue($valid);

        $valid = true;

        foreach ($booking->accommodations as $accommodation) {
            if (!$bookingNew->accommodations->contains($accommodation)) {
                $valid = false;
                break;
            }
        }
        $this->assertTrue($valid);

    }

    /**
     * verifica que se rediriga al student info si ya se ha procesado la compra exitosamente
     *
     * @test void
     */
    public function check_out_redirect_student_info()
    {
        $booking = factory(Booking::class)->create([
            'authorizationResult' => '00',
        ]);

        $response = $this->withSession(['booking' => $booking->id])->get(route('booking.checkout'));

        $response->assertStatus(302);
        $response->assertRedirect(route('student-info'));
    }

    /* 
     * verifica que el wallet esté funcionando
     *
     * @group wallet
     * @test void
     
    public function check_wallet_ok()
    {
        $booking = factory(Booking::class)->create();
        $this->assertTrue(!empty($booking->wallet()->codAsoCardHolderWallet));
    }
    */

}
