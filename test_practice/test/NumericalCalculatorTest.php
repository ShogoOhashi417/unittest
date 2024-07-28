<?php

use App\NumericalCalculator;
use PHPUnit\Framework\TestCase;

class NumericalCalculatorTest extends TestCase {

    public function testGetShapeReturnsNormal()
    {
        // 準備(Arrange)
        $numericalCalculator = new NumericalCalculator();

        // 実行(Act)
        $result = $numericalCalculator->add(2, 3);

        // 確認(assert)
        $this->assertEquals(5, $result);
    }
}