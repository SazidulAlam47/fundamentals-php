<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing',
    'french' => 'unknown'
];

$arrayB = [
    'ENGLISH' => 'limited',
    'BANGLA' => 'native',
    'FRENCH' => 'unknown'
];


$changedKeys = array_change_key_case($array, CASE_UPPER);

print_r($changedKeys);


$changedKeys = array_change_key_case($arrayB, CASE_LOWER);

print_r($changedKeys);