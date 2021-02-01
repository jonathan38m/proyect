<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccommodationForm extends FormRequest
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
            'accommodation' => 'required|exists:accommodations,id',
            'startDate' => 'required_if:accommodation,1,2|date',
            'endDate' => 'required_if:accommodation,1,2|date',
            'meals' => 'required_if:accommodation,1|numeric|digits:1',
            'bathroom' => 'required_if:accommodation,1|numeric|digits:1',
            'people' => 'required_if:accommodation,1,2|numeric|digits_between:1,3',
            'type' => 'required_if:accommodation,1,2|numeric|digits:1',
            'nameHotel' => 'required_if:accommodation,3|filled|max:20',
            'addressHotel' => 'required_if:accommodation,3|filled|max:100',
            'phoneHotel' => 'required_if:accommodation,3|filled|numeric|digits_between:1,20',

        ];
    }
}
