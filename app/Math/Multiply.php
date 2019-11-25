<?php

namespace App\Math;

class Multiply
{
    public function isMultiple(int $number, int $multiple)
    {
        return $number % $multiple == 0 ? 1 : 0;
    }
}
