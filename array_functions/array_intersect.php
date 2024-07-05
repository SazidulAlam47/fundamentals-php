<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing',
    'french' => 'unknown'
];

$arrayB = [
    'english' => 'limited',
    'bangla' => 'native',
];

$arrayC = [
    'english' => 'nothing',
    'arabic' => 'native',
    'urdu' => 'nothing',
    'french' => 'unknown'
];

$intersectValue = array_intersect($array, $arrayB, $arrayC); // intersect values

print_r($intersectValue);

$intersectKey = array_intersect_key($array, $arrayB, $arrayC); // intersect keys

print_r($intersectKey);

$intersectBoth = array_intersect_assoc($array, $arrayB, $arrayC); // intersect both keys and values

print_r($intersectBoth);