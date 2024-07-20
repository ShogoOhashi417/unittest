<?php

namespace App;

use App\Random;
use Exception;

class TestDouble {
    public function sum(int $number, Random $random)
    {
        try {
            $random_number = $random->sometimesError();

            return $random_number + $number;

        } catch (Exception $exception) {
            return 0;
        }
    }
}