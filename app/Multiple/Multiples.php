<?php

namespace App\Multiple;

class Multiples
{
    public $result = 0;

    public function processMultiples(int $number)
    {
        $multiples = array(
            new Multiple35($number),
            new Multiple3($number),
            new Multiple5($number)
        );

        $number = new EvaluatorNumbers($multiples);

        return $number;
    }
}
