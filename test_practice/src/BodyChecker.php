<?php

namespace App;

class BodyChecker {
    private readonly Person $person;

    public function __construct(
        Person $person
    ) {
        $this->person = $person;
    }

    public function getShape()
    {
        $BMI = $this->person->getBMI();

        if ($BMI < 18.5) {
            return '低体重';
        }

        if ($BMI >= 25) {
            return '肥満';
        }

        return '適正';
    }
}