<?php

namespace App;

class TestUseCase {
    public function handle(array $inputList): array
    {
        if (!$inputList) {
            return [];
        }
        
        $result = [];

        foreach ($inputList as $input) {
            $id = $input['id'];
            $name = $input['name'];

            $result[$id][] = $name;
        }
        return $result;
    }
}
