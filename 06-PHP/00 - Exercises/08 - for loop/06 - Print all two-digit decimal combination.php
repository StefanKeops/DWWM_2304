<?php

// Fonction pour générer les combinaisons
function genererCombinaisonsDecimales() {
    $combinaisons = array();

    // Boucles pour générer les combinaisons
    for ($i = 0; $i <= 9; $i++) {
        for ($j = 0; $j <= 9; $j++) {
            $combinaisons[] = $i * 10 + $j;
        }
    }

    return $combinaisons;
}

// Appel de la fonction pour obtenir les combinaisons
$listeCombinaisons = genererCombinaisonsDecimales();

// Affichage des combinaisons séparées par des virgules
echo implode(', ', $listeCombinaisons);

?>
