<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\OptionWeeks;
use App\Rules\Captcha;
use Illuminate\Validation\Rule;

class BookingForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          // se necesita la location por que de este depende el accommodation
          'locations' => 'required|exists:locations,id',
          'students' => 'required|numeric|min:1',

          'options.*.id' => 'required|exists:options,id',
          'options.*.weeks' => 'numeric',
          'options.*' => [new OptionWeeks(),'required'],
          'options' => 'required',


          'title'=> 'required|numeric',
          'lname'=> 'required|min:3|max:30',
          'fname'=> 'required|min:3|max:30',
          'email'=> 'required|email|max:50',
          'country'=> 'required|exists:countries,id',
          'address'=> 'required|min:3|max:150',
          'city'=> 'required|max:30',


          'accommodation' => [
            Rule::requiredIf(function () {
              return in_array("1", $this->locations) || in_array("2", $this->locations);
            }),
            'exists:accommodations,id'],
          'startDate' => 'required_if:accomodation,1,2|date',
          'endDate' => 'required_if:accomodation,1,2|date',
          'meals' => 'required_if:accomodation,1|numeric',
          'bathroom' => 'required_if:accomodation,1|numeric',
          'people' => 'required_if:accomodation,1,2|numeric',
          'type' => 'required_if:accomodation,1,2|numeric',
          'nameHotel' => 'required_if:accomodation,3|filled|max:20',
          'addressHotel' => 'required_if:accomodation,3|filled|max:100',
          'phoneHotel' => 'required_if:accomodation,3|filled|max:20',


          'meetAirport' => 'required_if:meetAirport,true|boolean',
          'dateArrival' => 'required_if:meetAirport,true|date',
          'timeArrival' => 'required_if:meetAirport,true|date_format:H:i',
          'airlineCompany' => 'required_if:meetAirport,true|max:50',
          'flightNumber' => 'required_if:meetAirport,true|max:50',



          'payment' => 'required|numeric|exists:payments,id',
          'terms' => 'required|boolean|accepted',



          'total' => 'required|numeric',


          'g-recaptcha-response' => ['required', new Captcha()],
        ];
    }
}
