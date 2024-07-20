<?php

use App\UsageFee;
use PHPUnit\Framework\TestCase;

class UsageFeeTest extends TestCase {
    // protected UsageFee $usageFee;

    // protected function setUp(): void
    // {
    //     $this->usageFee = new UsageFee();
    // }

    public function testUserFee()
    {
        $usageFee = new UsageFee();

        $this->assertEquals(5000, $usageFee->getUserFee(4));
        $this->assertEquals(5000, $usageFee->getUserFee(5));
        $this->assertEquals(6000, $usageFee->getUserFee(6));
        $this->assertEquals(49000, $usageFee->getUserFee(49));
        $this->assertEquals(50000, $usageFee->getUserFee(50));
        $this->assertEquals(50500, $usageFee->getUserFee(51));
    }

    public function testOptionFee()
    {
        $usageFee = new UsageFee();

        $this->assertEquals(0, $usageFee->getOptionFee(-1));
        $this->assertEquals(0, $usageFee->getOptionFee(0));
        $this->assertEquals(25000, $usageFee->getOptionFee(1));
        $this->assertEquals(50000, $usageFee->getOptionFee(2));
        $this->assertEquals(75000, $usageFee->getOptionFee(3));
        $this->assertEquals(80000, $usageFee->getOptionFee(4));
    }

    public function testInitialCost()
    {
        $usageFee = new UsageFee();

        $this->assertEquals(100000, $usageFee->getInitialCost(2023));
        $this->assertEquals(300000, $usageFee->getInitialCost(2024));
        $this->assertEquals(300000, $usageFee->getInitialCost(2025));
    }
}