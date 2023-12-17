<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Date d'échantillon
$dateOriginal = '2023-12-17';

// Convertir la date en objet DateTime
$dateObj = new DateTime($dateOriginal);

// Formater la date dans le nouveau format 'dd-mm-yyyy'
$dateFormatee = $dateObj->format('d-m-Y');

// Afficher la date convertie
echo "Date originale : $dateOriginal<br>";
echo "Date convertie : $dateFormatee";

?>
