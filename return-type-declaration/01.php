<?php

class Math {
    public function add(int $number1, int $number2) : int {
        return $number1 + $number2 + "333";
    }
}

$math = new Math();

echo "SUM 1 : {$math->add(1, 10)} \n";
echo "SUM 2 : {$math->add('222', 10)} \n";
