<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Date d'échantillon
$dateEchantillon = '2012-12-21';

// Convertir la date en objet DateTime
$dateObj = new DateTime($dateEchantillon);

// Ajouter un mois à la date
$dateObj->add(new DateInterval('P1M'));

// Afficher la nouvelle date
echo "La date après avoir ajouté un mois est : " . $dateObj->format('Y-m-d');

?>
