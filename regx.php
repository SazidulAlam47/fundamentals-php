<?php

$string = 'hello world. hello youtube';
$pattern = "/world/";

// match
if (preg_match($pattern, $string, $matches)) {
    print_r($matches);
} else {
    echo "there weren't any match";
}

// replace

$string = preg_replace($pattern, "hi", $string);
echo $string;