<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function calculerSemainesEntreDeuxDates($dateDebut, $dateFin) {
    // Convertir les dates en objets DateTime
    $dateDebutObj = new DateTime($dateDebut);
    $dateFinObj = new DateTime($dateFin);

    // Calculer la différence entre les deux dates
    $difference = $dateDebutObj->diff($dateFinObj);

    // Calculer le nombre de semaines
    $nombreSemaines = floor($difference->days / 7);

    // Retourner le résultat
    return $nombreSemaines;
}

// Exemple d'utilisation
$dateDebut = '2023-01-01';
$dateFin = '2023-12-31';

$nombreSemaines = calculerSemainesEntreDeuxDates($dateDebut, $dateFin);

echo "Le nombre de semaines entre $dateDebut et $dateFin est de $nombreSemaines semaines.";

?>
