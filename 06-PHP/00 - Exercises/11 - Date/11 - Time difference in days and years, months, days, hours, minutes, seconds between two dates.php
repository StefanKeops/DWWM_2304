<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function differenceTemps($date1, $date2) {
    // Convertir les dates en objets DateTime
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);

    // Calculer la différence entre les deux dates
    $difference = $datetime1->diff($datetime2);

    // Afficher la différence
    echo "Différence de temps entre $date1 et $date2 :<br>";
    echo $difference->y . " années, " . $difference->m . " mois, " . $difference->d . " jours, ";
    echo $difference->h . " heures, " . $difference->i . " minutes, " . $difference->s . " secondes";
}

// Exemple d'utilisation
$date1 = '2023-01-01 12:30:00';
$date2 = '2023-12-31 18:45:30';

differenceTemps($date1, $date2);

?>
