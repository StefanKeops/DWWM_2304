<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Date d'échantillon
$dateSpecifiee = '2023-05-15';

// Convertir la date en objet DateTime
$dateObj = new DateTime($dateSpecifiee);

// Obtenir le premier jour du mois
$premierJourMois = $dateObj->format('Y-m-01');

// Obtenir le dernier jour du mois
$dernierJourMois = $dateObj->format('Y-m-t');

// Afficher les résultats
echo "Date spécifiée : $dateSpecifiee<br>";
echo "Premier jour du mois : $premierJourMois<br>";
echo "Dernier jour du mois : $dernierJourMois";

?>
