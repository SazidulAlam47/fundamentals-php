<?php

$xml = '<?xml version="1.0" encoding="UTF-8"?>
<accounts>
    <account type="name">John</account>
    <account type="age">30</account>
    <account type="city">New York</account>
    <account type="hasChildren">true</account>
</accounts>';


$dom = new DOMDocument();
$dom->loadXML($xml);
$infos = $dom->getElementsByTagName('account');

foreach ($infos as $info) {
    $info_type = $info->getAttribute('type');
    $info_value = $info->nodeValue;

    echo $info_type . ' : ' . $info_value . PHP_EOL;
}

// another way to write
$infos = new SimpleXMLElement($xml);

foreach ($infos as $info) {
    $type = $info['type'];
    $phone = $info;

    echo $type . ' : ' . $phone . PHP_EOL;
}