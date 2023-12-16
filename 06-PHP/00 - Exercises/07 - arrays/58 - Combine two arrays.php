<?php

function combinerTableaux($cles, $valeurs) {
    $resultat = array_combine($cles, $valeurs);
    return $resultat;
}

// Exemple d'utilisation
$cles = array('x', 'y', 'z');
$valeurs = array(10, 20, 30);

$resultatCombinaison = combinerTableaux($cles, $valeurs);

// Affiche le résultat
print_r($resultatCombinaison);

?>
