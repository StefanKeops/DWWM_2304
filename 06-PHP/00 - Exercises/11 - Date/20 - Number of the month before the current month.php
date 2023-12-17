<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Obtenez le numéro du mois actuel
$moisActuel = date('n');

// Calculez le numéro du mois précédent
$moisPrecedent = ($moisActuel - 1) <= 0 ? 12 : $moisActuel - 1;

echo "Le numéro du mois précédent est : $moisPrecedent";

?>
