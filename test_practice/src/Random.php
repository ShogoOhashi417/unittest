<?php

namespace App;

use Exception;

class Random {
    public function sometimesError()
    {
        $number = rand(1,10);

        if ($number % 2 === 0) {
            throw new Exception();
        }

        return $number;
    }
}