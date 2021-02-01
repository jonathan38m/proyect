<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirportInformationForm extends FormRequest
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
            'meetAirport' => 'required|boolean',
            'dateArrival' => 'required_if:meetAirport,true|date',
            'timeArrival' => 'required_if:meetAirport,true|date_format:H:i',
            'airlineCompany' => 'required_if:meetAirport,true|max:50',
            'flightNumber' => 'required_if:meetAirport,true|max:50',
        ];
    }
}
