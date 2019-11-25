<?php
use PHPUnit\Framework\TestCase;


class MainTest extends TestCase
{
    public $array_numbers;

    function __construct() {
        parent::__construct();
        $main = new \App\Main(1, 100);
        $this->array_numbers = $main->getArrayNumbers();
    }

    public function testIsArray()
    {
        $this->assertIsArray($this->array_numbers);
    }

    public function testContains()
    {
        $this->assertContains("Linio", $this->array_numbers);
        $this->assertContains("IT", $this->array_numbers);
        $this->assertContains("Linianos", $this->array_numbers);
    }
    public function testFailure()
    {
        $this->assertCount(100, $this->array_numbers);
    }


}