<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Dates d'échantillon
$date1 = '1981-11-04';
$date2 = '2013-09-04';

// Convertir les dates en objets DateTime
$dateObj1 = new DateTime($date1);
$dateObj2 = new DateTime($date2);

// Calculer la différence entre les deux dates
$difference = $dateObj1->diff($dateObj2);

// Afficher la différence
echo "Différence entre les dates : " . $difference->y . " années, " . $difference->m . " mois, " . $difference->d . " jours";

?>
