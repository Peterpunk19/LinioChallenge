<?php
use PHPUnit\Framework\TestCase;


class MultiplyTest extends TestCase
{
    public $multiply;

    function __construct() {
        parent::__construct();
        $this->multiply = new \App\Math\Multiply();
    }

    public function testIsMultiple3()
    {
        $this->assertEquals($this->multiply->isMultiple(3,3), 1);
    }

    public function testIsMultiple5()
    {
        $this->assertEquals($this->multiply->isMultiple(20,5), 1);
    }

    public function testIsMultiple35()
    {
        $this->assertEquals($this->multiply->isMultiple(15,3), 1);
        $this->assertEquals($this->multiply->isMultiple(15,5), 1);
    }

    public function testIsNotMultiple()
    {
        $this->assertEquals($this->multiply->isMultiple(4,3), 0);
        $this->assertEquals($this->multiply->isMultiple(24,5), 0);
    }


}