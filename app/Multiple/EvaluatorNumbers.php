<?php

namespace App\Multiple;

class EvaluatorNumbers
{
    protected $multiples;

    public function __construct($multiples = array())
    {
        $this->multiples = $multiples;
    }

    public function getNumber()
    {
        $number = 0;

        foreach ($this->multiples as $multiple) {
            if ($multiple instanceof MulitplesInterface) {
                $number = $multiple->evaluatorMultiple();
                if (!is_numeric($number)) {
                    break;
                }
            }
        }
        return $number;
    }
}
