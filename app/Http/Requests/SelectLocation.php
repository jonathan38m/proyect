<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelectLocation extends FormRequest
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
            'locations' => 'required|exists:App\Location,id',
            'students' => 'required|numeric|min:1',
        ];
    }
}
