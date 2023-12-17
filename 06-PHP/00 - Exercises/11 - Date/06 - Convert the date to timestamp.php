<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Date d'échantillon
$dateOriginal = '12-05-2014';

// Convertir la date en timestamp
$timestamp = strtotime($dateOriginal);

// Afficher le timestamp
echo "Date originale : $dateOriginal<br>";
echo "Timestamp : $timestamp";

?>
