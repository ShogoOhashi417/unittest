<?php

namespace App;

class Person {
    private readonly int $height;
    private readonly int $weight;

    public function __construct(
        int $height,
        int $weight
    ){
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getBMI()
    {
        return $this->weight/(pow($this->height/100, 2));
        // return $this->height/(pow($this->weight/100, 2)); // 分子分母逆
    }
}