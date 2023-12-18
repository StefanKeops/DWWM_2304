<?php

function getDistanceBetweenPoints($latitude1, $longitude1, $latitude2, $longitude2)
{
    $earthRadius = 6371; // Rayon de la Terre en kilomètres

    $deltaLatitude = deg2rad($latitude2 - $latitude1);
    $deltaLongitude = deg2rad($longitude2 - $longitude1);

    $a = sin($deltaLatitude / 2) * sin($deltaLatitude / 2) +
        cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) *
        sin($deltaLongitude / 2) * sin($deltaLongitude / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    $distance = $earthRadius * $c;

    return $distance;
}

// Exemple d'utilisation avec des coordonnées fictives
$latitude1 = 48.858844;
$longitude1 = 2.294350;

$latitude2 = 34.052235;
$longitude2 = -118.243683;

$distance = getDistanceBetweenPoints($latitude1, $longitude1, $latitude2, $longitude2);

echo "Distance entre les deux points : " . round($distance, 2) . " kilomètres\n";

?>
