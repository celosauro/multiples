<?php

namespace Multiples;

final class MathUtils
{
    public static function isMultipleOf(int $number, int $multiple): bool
    {
        return ($number % $multiple === 0);
    }
}
