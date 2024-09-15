<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(8, $calculator->subtract(10, 2));
    }
}
