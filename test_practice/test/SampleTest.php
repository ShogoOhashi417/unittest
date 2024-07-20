<?php

use App\Sample;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class SampleTest extends TestCase {

    #[DataProvider('additionProvider')]
    public function test_add($a, $b, $expected) {
        $sample = new Sample();
        $this->assertEquals($expected, $a + $b);
    }

    public function test_sub() {
        $sample = new Sample();
        $this->assertEquals(1, $sample->Sub(7, 6));
    }

    // #[DataProvider('additionProvider')]
    // public function testAdd($a, $b, $expected)
    // {
    //     $this->assertEquals($expected, $a + $b);
    // }

    public static function additionProvider()
    {
        return [
            [1, 2, 3],
            [4, 5, 9],
            [3, 2, 5],
            // 必要に応じて他のデータセットを追加できます
        ];
    }
}
