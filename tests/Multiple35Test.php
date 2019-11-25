<?php
use PHPUnit\Framework\TestCase;


class Multiple35Test extends TestCase
{
    public $number;

    function __construct() {
        parent::__construct();
        $main = new \App\Multiple\Multiple35(90);
        $this->number = $main->evaluatorMultiple();
    }

    public function testIsMultiple()
    {
        $text = "Linianos";
        $this->assertEquals($this->number, $text);
    }


}