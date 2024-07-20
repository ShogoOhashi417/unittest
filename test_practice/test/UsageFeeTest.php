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
        $this->assertEquals(5000, $usageFee->getUserNumberFee(4));
        $this->assertEquals(5000, $usageFee->getUserNumberFee(5));
        $this->assertEquals(6000, $usageFee->getUserNumberFee(6));
        $this->assertEquals(49000, $usageFee->getUserNumberFee(49));
        $this->assertEquals(50000, $usageFee->getUserNumberFee(50));
        $this->assertEquals(50500, $usageFee->getUserNumberFee(51));
    }
}