<?php

namespace App;

class AffordChecker {
    public function isAfford(
        string $symbol,
        int $quantiry,
        int $balance
    )
    {
        if (!in_array($symbol, ['JP', 'US'])) {
            return false;
        }

        if ($quantiry <= 0) {
            return false;
        }

        if ($balance < 1000) {
            return false;
        }

        return true;
    }
}