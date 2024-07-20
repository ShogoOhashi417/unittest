<?php

use App\BodyChecker;
use App\Person;
use PHPUnit\Framework\TestCase;

class BodyCheckerTest extends TestCase {

    public function testGetShapeReturnsNormal()
    {
        $personStub = $this->createMock(Person::class);
        $personStub->method('getBMI')->willReturn(20);

        $bodyChecker = new BodyChecker($personStub);
        $result = $bodyChecker->getShape();

        $this->assertEquals('適正', $result);
    }
}