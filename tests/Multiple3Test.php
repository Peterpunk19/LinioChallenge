<?php
use PHPUnit\Framework\TestCase;


class Multiple3Test extends TestCase
{
    public $number;

    function __construct() {
        parent::__construct();
        $main = new \App\Multiple\Multiple3(30);
        $this->number = $main->evaluatorMultiple();
    }

    public function testIsMultiple()
    {
        $text = "Linio";
        $this->assertEquals($this->number, $text);
    }


}