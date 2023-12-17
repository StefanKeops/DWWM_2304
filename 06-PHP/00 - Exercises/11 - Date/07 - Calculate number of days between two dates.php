<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Dates d'échantillon
$date1 = '2023-01-01';
$date2 = '2023-12-31';

// Convertir les dates en objets DateTime
$dateObj1 = new DateTime($date1);
$dateObj2 = new DateTime($date2);

// Calculer la différence entre les deux dates
$difference = $dateObj1->diff($dateObj2);

// Afficher le nombre de jours
echo "Différence entre les dates : " . $difference->days . " jours";

?>

