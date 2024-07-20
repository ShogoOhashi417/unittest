<?php

namespace App;

class Person {
    private readonly int $height;
    private readonly int $weight;
    private readonly int $age;

    public function __construct(
        int $height,
        int $weight,
        int $age
    ){
        $this->height = $height;
        $this->weight = $weight;
        $this->age    = $age;
    }

    public function getBMI()
    {
        // return $this->height/(pow($this->weight/100, 2)); // 分子分母逆
        return $this->weight/(pow($this->height/100, 2));
    }

    public function getAge()
    {
        return $this->age;
    }
}