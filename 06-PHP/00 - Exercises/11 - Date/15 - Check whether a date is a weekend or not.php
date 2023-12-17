<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function estWeekend($date) {
    // Convertir la date en objet DateTime
    $dateObj = new DateTime($date);

    // Obtenir le numéro du jour de la semaine (1 pour lundi, 2 pour mardi, ..., 7 pour dimanche)
    $jourSemaine = $dateObj->format('N');

    // Vérifier si le jour de la semaine est samedi (6) ou dimanche (7)
    return ($jourSemaine == 6 || $jourSemaine == 7);
}

// Exemple d'utilisation
$dateAVerifier = '2023-12-16'; // Vous pouvez changer la valeur pour tester avec d'autres dates

if (estWeekend($dateAVerifier)) {
    echo "$dateAVerifier est un week-end.";
} else {
    echo "$dateAVerifier n'est pas un week-end.";
}

?>
