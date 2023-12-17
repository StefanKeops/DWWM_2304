<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function convertirSecondes($secondes) {
    // Calculer le nombre de jours, heures, minutes et secondes
    $jours = floor($secondes / (60 * 60 * 24));
    $resteHeures = $secondes % (60 * 60 * 24);
    $heures = floor($resteHeures / (60 * 60));
    $resteMinutes = $resteHeures % (60 * 60);
    $minutes = floor($resteMinutes / 60);
    $secondes = $resteMinutes % 60;

    // Retourner le résultat
    return array(
        'jours' => $jours,
        'heures' => $heures,
        'minutes' => $minutes,
        'secondes' => $secondes
    );
}

// Exemple d'utilisation
$secondes = 200000;

$resultat = convertirSecondes($secondes);

echo "En $secondes secondes, il y a : ";
echo $resultat['jours'] . " jours, ";
echo $resultat['heures'] . " heures, ";
echo $resultat['minutes'] . " minutes, et ";
echo $resultat['secondes'] . " secondes.";

?>
