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
    'arabic' => 'native',
    'urdu' => 'nothing'
];

$diffValue = array_diff($array, $arrayB, $arrayC); // difference values

print_r($diffValue);

$diffKey = array_diff_key($array, $arrayB, $arrayC); // difference keys

print_r($diffKey);

$diffBoth = array_diff_assoc($array, $arrayB, $arrayC); // difference both keys and values

print_r($diffBoth);