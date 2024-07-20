<?php

namespace App;

class UsageFee {

    public function getUserFee($userNumber)
    {
        if ($userNumber <= 5) {
            return 5000;
        }
        
        if ($userNumber <= 50) {
            return 1000 * $userNumber;
        }
        
        return 1000 * 50 + 500 * ($userNumber - 50);
    }

    public function getOptionFee($optionNumber)
    {
        if ($optionNumber < 0) {
            return 0;
        }
        
        if ($optionNumber <= 3) {
            return 25000 * $optionNumber;
        }

        return 20000 * $optionNumber;
    }

    public function getInitialCost($contractYear)
    {
        if ($contractYear >= 2024) {
            return 300000;
        }

        return 100000;
    }
}