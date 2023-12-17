<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Date d'échantillon
$dateSpecifiee = '2023-12-07';

// Convertir la date en objet DateTime
$dateObj = new DateTime($dateSpecifiee);

// Jour de la semaine
$jourSemaine = $dateObj->format('l');

// Numéro du jour du mois
$jourMois = $dateObj->format('j');

// Suffixe pour le jour du mois
$suffixe = date('S', strtotime($dateSpecifiee));

// Afficher le résultat
echo "$jourSemaine le $jourMois$suffixe";

?>
