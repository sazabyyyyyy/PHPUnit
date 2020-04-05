<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $this->assertSame(3, $calculator->add(1, 2));
    }

}
