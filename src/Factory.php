<?php

namespace Multiples;

final class Factory
{
    public static function create(int $number)
    {
        switch ($number) {
            case (self::isMultipleOf($number, 3) && self::isMultipleOf($number, 5)):
                return new MultipleOf3N5($number);
                break;
            case self::isMultipleOf($number, 3):
                return new MultipleOf3($number);
                break;
            case self::isMultipleOf($number, 5):
                return new MultipleOf5($number);
                break;
            default:
                return new NotMultiple($number);
                break;
        }
    }

    private static function isMultipleOf(int $number, int $multiple): bool
    {
        return ($number % $multiple === 0);
    }
}