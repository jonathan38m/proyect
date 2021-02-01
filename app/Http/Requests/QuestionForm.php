<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Captcha;

class QuestionForm extends FormRequest
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
            'name' => 'required|max:50',
            'lastName' => 'required|max:50',
            'country' => 'required|max:50',
            'email' => 'required|email|max:70',
            'q1' => 'required|numeric|max:3',
            'q2' => 'required|numeric|max:3',
            'q3' => 'required|numeric|max:3',
            'q4' => 'required|numeric|max:3',
            'q5' => 'required|numeric|max:3',
            'q6' => 'required|numeric|max:3',
            'q7' => 'required|numeric|max:3',
            'q8' => 'required|numeric|max:3',
            'q9' => 'required|numeric|max:3',
            'q10' => 'required|numeric|max:3',
            'q12' => 'required|numeric|max:3',
            'q13' => 'required|numeric|max:3',
            'q14' => 'required|numeric|max:3',
            'q15' => 'required|numeric|max:3',
            'q16' => 'required|numeric|max:3',
            'q17' => 'required|numeric|max:3',
            'q18' => 'required|numeric|max:3',
            'q19' => 'required|numeric|max:3',
            'q20' => 'required|numeric|max:3',
            'q21' => 'required|numeric|max:3',
            'q22' => 'required|numeric|max:3',
            'q23' => 'required|numeric|max:3',
            'q24' => 'required|numeric|max:3',
            'q25' => 'required|numeric|max:3',
            'q26' => 'required|numeric|max:3',
            'q27' => 'required|numeric|max:3',
            'q28' => 'required|numeric|max:3',
            'q29' => 'required|numeric|max:3',
            'q30' => 'required|numeric|max:3',
            'q31' => 'required|numeric|max:3',
            'q32' => 'required|numeric|max:3',
            'q33' => 'required|numeric|max:3',
            'q34' => 'required|numeric|max:3',
            'q35' => 'required|numeric|max:3',
            'q36' => 'required|numeric|max:3',
            'q37' => 'required|numeric|max:3',
            'q38' => 'required|numeric|max:3',
            'q39' => 'required|numeric|max:3',
            'q40' => 'required|numeric|max:3',
            'q41' => 'required|numeric|max:3',
            'q42' => 'required|numeric|max:3',
            'q43' => 'required|numeric|max:3',
            'q44' => 'required|numeric|max:3',
            'q45' => 'required|numeric|max:3',
            'q46' => 'required|numeric|max:3',
            'q47' => 'required|numeric|max:3',
            'q48' => 'required|numeric|max:3',
            'q49' => 'required|numeric|max:3',
            'q50' => 'required|numeric|max:3',
            'g-recaptcha-response' => ['required', new Captcha()],
        ];
    }
}
