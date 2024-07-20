<?php

use App\BodyChecker;
use PHPUnit\Framework\TestCase;

class BodyCheckerTest extends TestCase {

    public function testGetShapeReturnsNormal()
    {
        $bodyChecker = new BodyChecker();
        $result = $bodyChecker->getShape(180, 80);

        $this->assertEquals('適正', $result);
    }
}