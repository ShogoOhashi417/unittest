<?php

use App\UsageFee;
use PHPUnit\Framework\TestCase;

class UsageFeeTest extends TestCase {

    public function test_Sum_UsageFee_ReturnTotalFee()
    {
        $usageFee = new UsageFee();

        // ユーザー数の境界値分析テスト
        $this->assertEquals(5000, $usageFee->getTotalFee(4, 0));
        $this->assertEquals(5000, $usageFee->getTotalFee(5, 0));
        $this->assertEquals(6000, $usageFee->getTotalFee(6, 0));
        $this->assertEquals(49000, $usageFee->getTotalFee(49, 0));
        $this->assertEquals(50000, $usageFee->getTotalFee(50, 0));
        $this->assertEquals(50500, $usageFee->getTotalFee(51, 0));

        // オプション数の境界値分析テスト
        $this->assertEquals(55000, $usageFee->getTotalFee(1, 2));
        $this->assertEquals(80000, $usageFee->getTotalFee(1, 3));
        $this->assertEquals(85000, $usageFee->getTotalFee(1, 4));
    }

    public function test_Sum_UserFee_ReturnTotalFee()
    {
        $usageFee = new UsageFee();

        // ユーザー数の境界値分析テスト
        $this->assertEquals(0.05, $usageFee->getUserFeeRatio(4, 2023));
        $this->assertEquals(0.05, $usageFee->getUserFeeRatio(5, 2023));
        $this->assertEquals(0.06, $usageFee->getUserFeeRatio(6, 2023));
        $this->assertEquals(0.49, $usageFee->getUserFeeRatio(49, 2023));
        $this->assertEquals(0.5, $usageFee->getUserFeeRatio(50, 2023));
        $this->assertEquals(0.505, $usageFee->getUserFeeRatio(51, 2023));

        // 初期費用の境界値分析テスト
        $this->assertEquals(0.06, $usageFee->getUserFeeRatio(6, 2023));
        $this->assertEquals(0.02, $usageFee->getUserFeeRatio(6, 2024));
        $this->assertEquals(0.02, $usageFee->getUserFeeRatio(6, 2025));
    }
}