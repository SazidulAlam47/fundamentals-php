<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing'
];

$flipped = array_flip($array);

print_r($flipped);