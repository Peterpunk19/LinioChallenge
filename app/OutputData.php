<?php

namespace App;

use App\Multiple\EvaluatorNumbers;

class OutputData
{
    protected $evaluator_number;

    public function __construct(EvaluatorNumbers $evaluator_number)
    {
        $this->evaluator_number = $evaluator_number;
    }

    public function getData()
    {
        return $this->evaluator_number->getNumber();
    }
}
