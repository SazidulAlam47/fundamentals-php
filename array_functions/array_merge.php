<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing'
];

$arrayB = [
    'english' => 'bad',
    'bangla' => 'native',
    'arabic' => 'fluent',
    'chinese' => 'unknown'
];

$mergedArray = array_merge($array, $arrayB);
print_r($mergedArray);

$friends = ['galib', 'momin', 'nahid', 'sazid'];
$classmates = ['nahid', 'galib', 'fahim', 'rakib'];

$mergedArray = array_merge($friends, $classmates);
print_r($mergedArray);