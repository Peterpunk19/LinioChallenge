<?php

namespace App;

use App\Multiple\Multiples;

class Main
{
    protected $multipleResults;

    protected $init = 0;
    protected $final = 0;

    public function __construct($init, $final)
    {
        $this->init = $init;
        $this->final = $final;
    }

    public function getArrayNumbers()
    {
        $array_numbers = [];

        $this->multipleResults = new Multiples();

        for ($i = $this->init; $i <= $this->final; $i++) {
            $result = $this->multipleResults->processMultiples($i);

            $output = new OutputData($result);
            $array_numbers[] = $output->getData();
        }

        return $array_numbers;
    }
}
