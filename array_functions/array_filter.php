<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing'
];

$filteredArray = array_filter($array, function ($level) {
    return $level === 'native';
}, 0);

print_r($filteredArray);


$filteredArray = array_filter($array, function ($lang) {
    return $lang === 'arabic';
}, ARRAY_FILTER_USE_KEY);

print_r($filteredArray);

$filteredArray = array_filter($array, function ($level, $lang) {
    return $lang === 'english' || $level === 'nothing';
}, ARRAY_FILTER_USE_BOTH);

print_r($filteredArray);



// 0 - value for each array item (default)
// ARRAY_FILTER_USE_KEY - value of key
// ARRAY_FILTER_USE_BOTH - value of key and value