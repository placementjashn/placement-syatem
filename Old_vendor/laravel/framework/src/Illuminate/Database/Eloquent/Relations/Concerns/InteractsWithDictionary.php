<?php

namespace Illuminate\Database\Eloquent\Relations\Concerns;

use BackedEnum;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use UnitEnum;

trait InteractsWithDictionary
{
    /**
     * Get a dictionary key attribute - casting it to a string if necessary.
     *
     * @param  mixed  $attribute
     * @return mixed
     *
     * @throws \Doctrine\Instantiator\Exception\InvalidArgumentException
     */
    protected function getDictionaryKey($attribute)
    {
        if (is_object($attribute)) {
            if (method_exists($attribute, '__toString')) {
                return $attribute->__toString();
            }

<<<<<<< HEAD
            if ($attribute instanceof UnitEnum) {
=======
<<<<<<< HEAD
            if (function_exists('enum_exists') &&
                $attribute instanceof UnitEnum) {
=======
            if ($attribute instanceof UnitEnum) {
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
                return $attribute instanceof BackedEnum ? $attribute->value : $attribute->name;
            }

            throw new InvalidArgumentException('Model attribute value is an object but does not have a __toString method.');
        }

        return $attribute;
    }
}
