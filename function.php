<?php

function add(int $number1 = 2, int $number2 = 3): int
{
    return $number1 + $number2;
}

$result = add(10);

echo $result;