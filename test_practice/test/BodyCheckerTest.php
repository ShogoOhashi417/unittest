<?php

use App\BodyChecker;
use App\Person;
use PHPUnit\Framework\TestCase;

class BodyCheckerTest extends TestCase {

    public function testGetShapeReturnsNormal()
    {
        // 準備
        $personStub = $this->createMock(Person::class);

        // PersonクラスのgetBMIメソッドは必ず20を返す
        $personStub->method('getBMI')->willReturn(20);

        // 実行
        $bodyChecker = new BodyChecker($personStub);
        $result = $bodyChecker->getShape();

        // 確認
        $this->assertEquals('適正', $result);
    }
}