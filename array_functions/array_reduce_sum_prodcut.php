<?php

$array = [1, 2, 3, 4];

$result = array_reduce($array, function ($carry, $item) {
    return $carry + $item;
}, 0);

echo $result . PHP_EOL;

$sum = array_sum($array);

echo 'sum = ' . $sum . PHP_EOL;

$product = array_product($array);

echo 'product = ' . $product . PHP_EOL;