<?php

$email = 'admin@company.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is valid. Thank you!" . PHP_EOL;
} else {
    echo "Email is not valid" . PHP_EOL;
}

$url = 'http://www.google.com';

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "URL is valid. Thank you!" . PHP_EOL;
} else {
    echo "URL is not valid" . PHP_EOL;
}

// sanitize
$variable = '<p>Hello World</p>';
$sanitizedData = filter_var($variable, FILTER_SANITIZE_STRING);
echo $sanitizedData;


$variable = '<p>admin@company.com</p>';
$sanitizedData = filter_var($variable, FILTER_SANITIZE_EMAIL);
echo $sanitizedData;


$variable = '<p>http://www.google.com</p>';
$sanitizedData = filter_var($variable, FILTER_SANITIZE_URL);
echo $sanitizedData;