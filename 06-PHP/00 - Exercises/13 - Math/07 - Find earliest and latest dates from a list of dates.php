<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Liste de dates
$dates = array('2022-01-15', '2021-05-20', '2023-03-10', '2022-09-01', '2022-12-05');

// Convertir les dates en timestamps
$timestamps = array_map('strtotime', $dates);

// Trouver la date la plus ancienne et la plus récente
$earliestDate = date('Y-m-d', min($timestamps));
$latestDate = date('Y-m-d', max($timestamps));

// Afficher les résultats
echo "Date la plus ancienne : $earliestDate\n";
echo "Date la plus récente : $latestDate\n";

?>
