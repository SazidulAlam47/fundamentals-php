<?php

$str = 'hello from string literal';

$upperCase = strtoupper($str);

echo $upperCase . PHP_EOL;

$lowerCase = strtolower($upperCase);

echo $lowerCase . PHP_EOL;


$capitalize = ucfirst($str); // uppercase first letter of sentence

echo $capitalize . PHP_EOL;


$upperCaseWord = ucwords($str); // uppercase first letter of each word

echo $upperCaseWord . PHP_EOL;

$text = '         hello           ';

echo $text . PHP_EOL;

$trimText = trim($text) . PHP_EOL;

echo $trimText;

$text = "hello from string literal \nthis is a new line";

echo $text . PHP_EOL;

$lineBreak = nl2br($text);

echo $lineBreak . PHP_EOL;

$html = '<div class="something"><p>hello <br /> from html</p></div>';

echo $html . PHP_EOL;

$stripTags = strip_tags($html);

echo $stripTags . PHP_EOL;