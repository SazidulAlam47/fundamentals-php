<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing',
];

$arrayUpdated = [
    'english' => 'bad',
    'bangla' => 'native',
    'arabic' => 'fluent',
    'chinese' => 'unknown'
];

$newArray = array_replace($array, $arrayUpdated);

print_r($newArray);