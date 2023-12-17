<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function datesDebutFinSemaine($numeroSemaine, $annee) {
    // Créer un objet DateTime pour le premier jour de l'année
    $premierJourAnnee = new DateTime("$annee-01-01");

    // Ajouter le nombre de semaines nécessaire pour atteindre la semaine spécifiée
    $premierJourSemaine = $premierJourAnnee->modify("+" . ($numeroSemaine - 1) . " weeks");

    // Calculer la date de fin de semaine en ajoutant 6 jours au premier jour de la semaine
    $dernierJourSemaine = clone $premierJourSemaine;
    $dernierJourSemaine->modify("+6 days");

    // Retourner un tableau contenant les dates de début et de fin de semaine
    return array(
        'debut' => $premierJourSemaine->format('Y-m-d'),
        'fin' => $dernierJourSemaine->format('Y-m-d')
    );
}

// Exemple d'utilisation
$numeroSemaine = 12;
$annee = 2014;

$resultat = datesDebutFinSemaine($numeroSemaine, $annee);

echo "Semaine $numeroSemaine de l'année $annee : Du {$resultat['debut']} au {$resultat['fin']}";

?>
