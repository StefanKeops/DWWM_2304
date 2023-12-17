<?php

// Définissez le fuseau horaire à 'Australia/Melbourne'
date_default_timezone_set('Australia/Melbourne');

// Obtenez la date/heure actuelle dans la zone horaire spécifiée
$dateActuelleMelbourne = new DateTime();

// Affichez la date/heure actuelle de Melbourne
echo "La date/heure actuelle à Melbourne est : " . $dateActuelleMelbourne->format('Y-m-d H:i:s');

?>
