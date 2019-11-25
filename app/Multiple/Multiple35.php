<?php

namespace App\Multiple;

use App\Math\Multiply;

class multiple35 implements MulitplesInterface
{
    const MULTIPLE3 = 3;
    const MULTIPLE5 = 5;

    const TEXT = "Linianos";

    protected $number = 0;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function evaluatorMultiple()
    {
        $multiply = new Multiply();
        $is_multiple3 = $multiply->isMultiple($this->number, self::MULTIPLE3);
        $is_multiple5 = $multiply->isMultiple($this->number, self::MULTIPLE5);

        if ($is_multiple3 && $is_multiple5) {
            return self::TEXT;
        }
        return $this->number;
    }
}
