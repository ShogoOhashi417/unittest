<?php

namespace App;

class BodyChecker {
    private readonly Person $person;

    // DI
    // public function __construct(
    //     Person $person
    // ){
    //     $this->person = $person;
    // }

    public function getShape($height, $weight) // DIしてない
    // public function getShape() // DIしてる
    {
        // DIしてない
        $person = new Person($height, $weight);
        $BMI = $person->getBMI();

        // DIしてる
        // $BMI = $this->person->getBMI();

        if ($BMI < 18.5) {
            return '低体重';
        }

        if ($BMI >= 25) {
            return '肥満';
        }

        return '適正';
    }
}