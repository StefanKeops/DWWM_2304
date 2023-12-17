<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function verifierValiditeDates($dates) {
    foreach ($dates as $date) {
        // Utiliser la fonction checkdate() pour vérifier la validité de la date
        list($year, $month, $day) = explode('-', $date);
        if (checkdate($month, $day, $year)) {
            echo "La date $date est valide.<br>";
        } else {
            echo "La date $date n'est pas valide.<br>";
        }
    }
}

// Exemple d'utilisation avec un tableau de dates
$datesAVerifier = ['2023-01-15', '2023-02-30', '2023-12-25'];

verifierValiditeDates($datesAVerifier);

?>
