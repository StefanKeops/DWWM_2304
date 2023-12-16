<?php

function creerTableauRange($debut, $fin) {
    $resultat = array();

    for ($i = $debut; $i <= $fin; $i++) {
        $resultat[$i] = $i + 1;
    }

    return $resultat;
}

// Exemple d'utilisation pour créer le tableau de 20 à 25
$tableauResultat = creerTableauRange(20, 25);

// Affiche le résultat
print_r($tableauResultat);

?>
