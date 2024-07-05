<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing',
    'chinese' => 'unknown'
];

$chunkedArray = array_chunk($array, 2, true);

print_r($chunkedArray);