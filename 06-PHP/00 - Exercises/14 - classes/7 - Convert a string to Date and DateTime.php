<?php

// Définir la timezone
date_default_timezone_set('UTC'); // Remplacez 'UTC' par le fuseau horaire souhaité

$dateString = '12-08-2004';

// Convertir la chaîne en objet Date
$dateObject = DateTime::createFromFormat('d-m-Y', $dateString);
if ($dateObject) {
    echo "Objet Date : " . $dateObject->format('Y-m-d') . "\n";
} else {
    echo "Format de date non valide.\n";
}

// Convertir la chaîne en objet DateTime
$dateTimeObject = DateTime::createFromFormat('d-m-Y H:i:s', $dateString . ' 00:00:00');
if ($dateTimeObject) {
    echo "Objet DateTime : " . $dateTimeObject->format('Y-m-d H:i:s') . "\n";
} else {
    echo "Format de date et heure non valide.\n";
}

?>
