<?php

use App\BodyChecker;
use App\Person;
use PHPUnit\Framework\TestCase;

class BodyCheckerTest extends TestCase {

    public function test_shape()
    {
        // DIしていない
        $bodyChecker = new BodyChecker();
        $result = $bodyChecker->getShape(180, 80);

        // スタブを使った
        // $personStub = $this->createMock(Person::class);
        // $personStub->method('getBMI')->willReturn(80/(1.8**2));

        // $bodyChecker = new BodyChecker($personStub);
        // $result = $bodyChecker->getShape();

        $this->assertEquals('適正', $result);
    }
}