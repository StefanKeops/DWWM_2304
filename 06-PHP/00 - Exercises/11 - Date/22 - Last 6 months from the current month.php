<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Obtenez le numéro du mois actuel
$moisActuel = date('n');

// Initialisez un tableau pour stocker les noms des mois
$moisLabels = array(
    1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril', 5 => 'mai', 6 => 'juin',
    7 => 'juillet', 8 => 'août', 9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre'
);

// Obtenez les 6 derniers mois
$moisDerniers = array();
for ($i = 0; $i < 6; $i++) {
    $mois = ($moisActuel - $i) <= 0 ? 12 + ($moisActuel - $i) : $moisActuel - $i;
    $moisDerniers[] = $moisLabels[$mois];
}

// Affichez les résultats
echo "Les 6 derniers mois à partir du mois actuel sont : " . implode(', ', $moisDerniers);

?>
