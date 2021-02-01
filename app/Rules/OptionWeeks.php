<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Option;

class OptionWeeks implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //dd($value);
        $option = Option::find($value['id']);
        if( ( $option && !$option->price_plus && !isset($value['weeks'])))
        {
            return false;
        }
        else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The numeber of weeks are required.';
    }
}
