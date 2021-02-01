<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Captcha;

class VolunteerForm extends FormRequest
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
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'preferredProjects' => 'required|numeric|max:8',
            'chooseProgram' => 'required|numeric|max:2',
            'firtsName' => 'required|max:30',
            'lastName' => 'required|max:30',
            'firtsName' => 'required|max:30',
            'email' => 'required|email|max:50',
            'yourCountry' => 'required|max:50',
            'g-recaptcha-response' => ['required', new Captcha()],
        ];
    }
}
