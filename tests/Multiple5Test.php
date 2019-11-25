<?php
use PHPUnit\Framework\TestCase;


class Multiple5Test extends TestCase
{
    public $number;

    function __construct() {
        parent::__construct();
        $main = new \App\Multiple\Multiple5(50);
        $this->number = $main->evaluatorMultiple();
    }

    public function testIsMultiple()
    {
        $text = "IT";
        $this->assertEquals($this->number, $text);
    }


}