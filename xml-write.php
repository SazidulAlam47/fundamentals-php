<?php

/*
<?xml version="1.0" encoding="UTF-8"?>
<accounts>
    <account type="name">John</account>
    <account type="age">30</account>
    <account type="city">New York</account>
    <account type="hasChildren">true</account>
</accounts>
*/

$infos = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><accounts></accounts>');

$infos->addChild('account', 'John')->addAttribute('type', 'name');
$infos->addChild('account', '30')->addAttribute('type', 'age');
$infos->addChild('account', 'New York')->addAttribute('type', 'city');
$infos->addChild('account', 'true')->addAttribute('type', 'hasChildren');

$finalXml = $infos->asXML();

echo $finalXml;

