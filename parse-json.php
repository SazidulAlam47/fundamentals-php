<?php

$json = '{
"account" : {
        "name": "John",
        "age": 30,
        "city": "New York",
        "hasChildren": true
    }
}';


$NewArray = json_decode($json, true);
print_r($NewArray);


$NewArray = [
    'name' => "John",
    'age' => 30,
    'city' => "New York",
    'hasChildren' => true
];

$json = json_encode($NewArray);
echo $json;
