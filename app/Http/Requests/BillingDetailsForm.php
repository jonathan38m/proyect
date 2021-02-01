<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingDetailsForm extends FormRequest
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
            'title'=> 'required|numeric',
            'lname'=> 'required|min:3|max:30',
            'fname'=> 'required|min:3|max:30',
            'email'=> 'required|email|max:50',
            'country'=> 'required|exists:countries,id',
            'address'=> 'required|min:3|max:191',
            'city'=> 'required|max:30',
        ];
    }
}
