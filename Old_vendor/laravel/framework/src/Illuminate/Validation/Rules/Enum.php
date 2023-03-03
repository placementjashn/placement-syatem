<?php

namespace Illuminate\Validation\Rules;

use Illuminate\Contracts\Validation\Rule;
use TypeError;

class Enum implements Rule
{
    /**
     * The type of the enum.
     *
     * @var string
     */
    protected $type;

    /**
     * Create a new rule instance.
     *
     * @param  string  $type
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;
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
        if ($value instanceof $this->type) {
            return true;
        }

<<<<<<< HEAD
        if (is_null($value) || ! enum_exists($this->type) || ! method_exists($this->type, 'tryFrom')) {
=======
<<<<<<< HEAD
        if (is_null($value) || ! function_exists('enum_exists') || ! enum_exists($this->type) || ! method_exists($this->type, 'tryFrom')) {
=======
        if (is_null($value) || ! enum_exists($this->type) || ! method_exists($this->type, 'tryFrom')) {
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
            return false;
        }

        try {
            return ! is_null($this->type::tryFrom($value));
        } catch (TypeError) {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return array
     */
    public function message()
    {
        $message = trans('validation.enum');

        return $message === 'validation.enum'
            ? ['The selected :attribute is invalid.']
            : $message;
    }
}
