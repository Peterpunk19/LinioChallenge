<?php

namespace App\Multiple;

use App\Math\Multiply;

class Multiple3 implements MulitplesInterface
{
    const MULTIPLE = 3;

    const TEXT = "Linio";

    protected $number = 0;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function evaluatorMultiple()
    {
        $multiply = new Multiply();
        $is_multiple = $multiply->isMultiple($this->number, self::MULTIPLE);

        if ($is_multiple) {
            return self::TEXT;
        }
        return $this->number;
    }
}
