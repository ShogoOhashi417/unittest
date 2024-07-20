<?php

require 'vendor/autoload.php';

use App\TestDouble;
use App\TestUseCase;
use App\Random;
use App\AffordChecker;
use App\BodyChecker;
use App\Person;
use App\UsageFee;

$testDouble = new TestDouble();

$result = $testDouble->sum(
    1,
    new Random()
);

// print $result;

$testList = [
    [
        'id' => 1,
        'name' => '大橋'
    ],
    [
        'id' => 1,
        'name' => '省吾'
    ],
    [
        'id' => 2,
        'name' => 'わっしょい'
    ],
    [
        'id' => 2,
        'name' => '太郎'
    ],
    [
        'id' => 3,
        'name' => 'よいしょ'
    ],
    [
        'id' => 4,
        'name' => 'えっさほいさ'
    ],
];

// $testUseCase = new TestUseCase();
// $result = $testUseCase->handle($testList);

// var_dump($result);

$symbol = 'JP';
$quantity = 10000;
$balance = 10000;

$affordChecker = new AffordChecker();

$result = $affordChecker->isAfford(
    $symbol,
    $quantity,
    $balance
);

// $bodyChecker = new BodyChecker();
// $bodyChecker = new BodyChecker(
//     new Person(180, 80)
// );

// $result = $bodyChecker->getShape(180, 80);
// $result = $bodyChecker->getShape();

// var_dump($result);

$usageFee = new UsageFee();
$result = $usageFee->getTotalFee(5, ['FILE_STORAGE', 'API']);
var_dump($result);