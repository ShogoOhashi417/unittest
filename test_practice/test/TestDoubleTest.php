<?php

use App\TestDouble;
use App\Random;
use PHPUnit\Framework\TestCase;

class TestDoubleTest extends TestCase {

    public function test_sum() {
        $number = 1;

        $stub = $this->createStub(Random::class);

        $stub->method('sometimesError')->will($this->throwException(new Exception));;

        $testDouble = new TestDouble();

        $result = $testDouble->sum($number, $stub);

        $this->assertSame($result, 0);
    }
}
