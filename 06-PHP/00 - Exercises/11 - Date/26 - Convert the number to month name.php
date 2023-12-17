<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function convertirNumeroMoisEnNom($numeroMois) {
    // Tableau des noms des mois en français
    $moisLabels = array(
        1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril', 5 => 'mai', 6 => 'juin',
        7 => 'juillet', 8 => 'août', 9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre'
    );

    // Vérifier si le numéro de mois est valide
    if (array_key_exists($numeroMois, $moisLabels)) {
        return $moisLabels[$numeroMois];
    } else {
        return "Mois invalide";
    }
}

// Exemple d'utilisation
$numeroMois = 8; // Vous pouvez changer la valeur pour tester avec d'autres numéros de mois

$nomMois = convertirNumeroMoisEnNom($numeroMois);

echo "Le numéro $numeroMois correspond au mois de $nomMois.";

?>
