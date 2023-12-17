<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function ajouterJours($date, $nombreJours) {
    // Convertir la date en objet DateTime
    $dateObj = new DateTime($date);

    // Ajouter ou soustraire le nombre de jours spécifié
    $dateObj->modify("$nombreJours days");

    // Afficher la nouvelle date
    echo "La nouvelle date après ajout/soustraction de $nombreJours jours : " . $dateObj->format('Y-m-d');
}

// Exemple d'utilisation pour ajouter des jours
$dateOriginale1 = '2023-01-01';
$nombreJoursAjouter = 10;

ajouterJours($dateOriginale1, $nombreJoursAjouter);

echo "<br>";

// Exemple d'utilisation pour soustraire des jours
$dateOriginale2 = '2023-01-15';
$nombreJoursSoustraire = 5;

ajouterJours($dateOriginale2, -$nombreJoursSoustraire);

?>
