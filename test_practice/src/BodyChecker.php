<?php

namespace App;

class BodyChecker {
    public function getShape($height, $weight)
    {
        // DIしていない
        $person = new Person($height, $weight);

        $BMI = $person->getBMI();

        if ($BMI < 18.5) {
            return '低体重';
        }

        if ($BMI >= 25) {
            return '肥満';
        }

        return '適正';
    }
}