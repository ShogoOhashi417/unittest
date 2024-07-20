<?php

use App\AffordChecker;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class AffordCheckerTest extends TestCase {

    #[DataProvider('additionProvider')]
    public function test_is_afford(
        $symbol,
        $quantity,
        $balance,
        $result
    )
    {
        $affordChecker = new AffordChecker();
        $this->assertEquals($result, $affordChecker->isAfford($symbol, $quantity, $balance));
    }

    public static function additionProvider()
    {
        return [
            ['JP', 10, 10000, true],
            ['AA', 10, 10000, false],
            ['JP', 10, 100, false],
            ['JP', 0, 10000, false],
            // 必要に応じて他のデータセットを追加できます
        ];
    }
}