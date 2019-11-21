<?php

namespace Multiples;

final class Factory
{
    public static function create(int $number)
    {
        switch ($number) {
            case (MathUtils::isMultipleOf($number, 3) && MathUtils::isMultipleOf($number, 5)):
                return new MultipleOf3N5($number);
                break;
            case MathUtils::isMultipleOf($number, 3):
                return new MultipleOf3($number);
                break;
            case MathUtils::isMultipleOf($number, 5):
                return new MultipleOf5($number);
                break;
            default:
                return new NotMultiple($number);
                break;
        }
    }
}
