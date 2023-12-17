<?php

// Définir le fuseau horaire à utiliser
date_default_timezone_set('Europe/Rome');

// Tableau des noms des mois en italien
$moisLabels = array(
    1 => 'gennaio', 2 => 'febbraio', 3 => 'marzo', 4 => 'aprile', 5 => 'maggio', 6 => 'giugno',
    7 => 'luglio', 8 => 'agosto', 9 => 'settembre', 10 => 'ottobre', 11 => 'novembre', 12 => 'dicembre'
);

// Tableau des noms des jours de la semaine en italien
$jourSemaineLabels = array(
    'domenica', 'lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato'
);

// Obtenez la date actuelle
$dateActuelle = new DateTime();

// Obtenez le numéro du mois et du jour de la semaine actuels
$numeroMoisActuel = (int)$dateActuelle->format('n');
$numeroJourSemaineActuel = (int)$dateActuelle->format('w');

// Obtenez les noms en italien
$moisActuelLabel = $moisLabels[$numeroMoisActuel];
$jourSemaineActuelLabel = $jourSemaineLabels[$numeroJourSemaineActuel];

// Affichez la date actuelle en italien
echo "La date actuelle en italien est : {$jourSemaineActuelLabel}, {$dateActuelle->format('d')} {$moisActuelLabel} {$dateActuelle->format('Y')}";

?>
