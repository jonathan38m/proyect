<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Captcha;

class StudentInfoForm extends FormRequest
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
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email',
            'bday' => 'required|date',
            'sex' => 'required',
            'country' => 'required',
            'passport' => 'required',
            'tel2' => 'required',
            'g-recaptcha-response' => ['required', new Captcha()],
        ];
    }
}
