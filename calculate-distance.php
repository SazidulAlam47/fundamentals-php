<?php

function calculateDistance(array $location1, array $location2)
{
    $longitudeDiff = $location1['longitude'] - $location2['longitude'];
    $longitudeDiffRad = deg2rad($longitudeDiff);
    $longitudeDiffCos = cos($longitudeDiffRad);


    $latitude1Rad = deg2rad($location1['latitude']);
    $latitude2Rad = deg2rad($location2['latitude']);

    $latitude1Sin = sin($latitude1Rad);
    $latitude1Cos = cos($latitude1Rad);
    $latitude2Sin = sin($latitude2Rad);
    $latitude2Cos = cos($latitude2Rad);

    $distance = $latitude1Sin * $latitude2Sin + $latitude1Cos * $latitude2Cos * $longitudeDiffCos;

    $arcCosDistance = acos($distance);
    $radiusOfEarth = 6364.963;

    $distanceInKm = $arcCosDistance * $radiusOfEarth;

    return $distanceInKm . " Km" . PHP_EOL;
}

$location1 = ["latitude" => "42.3601", "longitude" => "-71.0589"];
$location2 = ["latitude" => "40.7128", "longitude" => "-74.0060"];

// location of paris
$location3 = ["latitude" => "48.8566", "longitude" => "2.3522"];
// location of berlin
$location4 = ["latitude" => "52.5200", "longitude" => "13.4050"];



echo calculateDistance($location1, $location2);
echo calculateDistance($location3, $location4);