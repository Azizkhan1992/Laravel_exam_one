<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


// Custom Validatsiya qilish qoidalari bo'lib, uni php artisan make:rule RuleName komnandasi bilan yaratiladi
class PhoneNumber implements Rule
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
        return substr($value, 0, 1) == '+' && strlen($value) == 14;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Telefon raqami + bilan boshlanib 13 raqamdan kam bo\'lmasligi kerak';
    }
}
