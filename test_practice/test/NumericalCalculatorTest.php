<?php

use App\NumericalCalculator;
use PHPUnit\Framework\TestCase;

class NumericalCalculatorTest extends TestCase {

    public function testGetShapeReturnsNormal()
    {
        $numericalCalculator = new NumericalCalculator();
        $result = $numericalCalculator->add(2, 3);

        $this->assertEquals(5, $result);
    }
}