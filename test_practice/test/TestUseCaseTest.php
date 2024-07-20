<?php

use App\TestUseCase;
use PHPUnit\Framework\TestCase;

class TestUseCaseTest extends TestCase {
    private $testUseCase;

    protected function setUp(): void
    {
        $this->testUseCase = new TestUseCase();
    }

    public function testHandleWithStandardInput()
    {
        // 準備
        $testUsecase = new TestUseCase();

        $inputList = [
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

        $expectedList = [
            1 => [
                '大橋',
                '省吾'
            ],
            2 => [
                'わっしょい',
                '太郎'
            ],
            3 => [
                'よいしょ'
            ],
            4 => [
                'えっさほいさ'
            ]
        ];

        // 実行
        $result = $this->testUseCase->handle($inputList);
        // 確認

        $this->assertEqualsCanonicalizing($expectedList, $result);
    }

    public function testHandleWithEmptyUnput()
    {
        // 準備
        $testUsecase = new TestUseCase();

        $inputList = [];
        $expectedList = [];
        // 実行
        $result = $this->testUseCase->handle($inputList);
        
        // 確認
        $this->assertEquals($expectedList, $result);
    }

    public function testHandleWithEdgeCase()
    {
        $inputList = [
            ['id' => '', 'name' => 'Alice'],
            ['id' => 2, 'name' => NULL],
            ['id' => NULL, 'name' => 'Charlie'],
        ];
        $expectedOutput = [
            '' => ['Alice', 'Charlie'],
            2 => [NULL],
        ];

        $result = $this->testUseCase->handle($inputList);

        // var_dump($result);

        $this->assertEquals($expectedOutput, $result);
    }
}