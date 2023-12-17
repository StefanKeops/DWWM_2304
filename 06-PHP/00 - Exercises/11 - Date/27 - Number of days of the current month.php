<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Obtenez le nombre de jours du mois actuel
$nombreJoursMoisActuel = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));

echo "Le nombre de jours dans le mois actuel est : $nombreJoursMoisActuel jours.";

?>
