<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function convertirNumeroMoisEnNom($numeroMois) {
    // Utiliser la fonction date() pour obtenir le nom du mois à partir du numéro
    $nomMois = date('F', mktime(0, 0, 0, $numeroMois, 1, 2000));

    return $nomMois;
}

// Exemple d'utilisation
$numeroMois = 8; // Vous pouvez changer la valeur pour tester avec d'autres numéros de mois

$nomMois = convertirNumeroMoisEnNom($numeroMois);

echo "Le numéro $numeroMois correspond au mois de $nomMois.";

?>
