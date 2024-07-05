<?php


$langs = ['english', 'germen', 'bangla', 'urdu', 'arabic'];


$langs_capitalize = array_map(function ($lang) {
    return ucwords($lang);
}, $langs);

print_r($langs_capitalize);