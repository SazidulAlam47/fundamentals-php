<?php

$array = ['foo', 'bar', 2024, 'baz', 'qux', 'bar', 'qux', '2024', 2024];

$filtered = array_unique($array);

print_r($filtered);

$filtered = array_unique($array, SORT_REGULAR);

print_r($filtered);