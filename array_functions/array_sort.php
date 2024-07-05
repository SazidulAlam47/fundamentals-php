<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing',
    'spanish',
    'italian',
    'french'
];


print_r($array);

// it will change the original array

ksort($array); // key sort

print_r($array);

krsort($array); // key reverse sort

print_r($array);

asort($array); // sort by value and keep the keys

print_r($array);

arsort($array); // reverse sort by value, keep the keys

print_r($array);


sort($array); // sort by values and remove the old keys

print_r($array);

rsort($array); // descending

print_r($array);

