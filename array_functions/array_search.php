<?php

$array = [
    'english' => 'limited',
    'bangla' => 'native',
    'arabic' => 'learning',
    'german' => 'nothing',
    'chinese' => 'unknown'
];

$key = array_search('learning', $array);


if ($key != false) {
    echo $key;
} else {
    echo "not found";
}
