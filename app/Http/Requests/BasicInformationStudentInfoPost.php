<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicInformationStudentInfoPost extends FormRequest
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
            'lname'    => 'required|max:191',
            'fname'    => 'required|max:191',
            'email'    => 'required|email|max:191',
            'bday'     => 'required|date',
            'sex'      => 'required|max:191',
            'country'  => 'required|max:191',
            'passport' => 'required|max:191',
            'tel2'     => 'required|max:191',
        ];
    }
}
