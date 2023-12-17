<?php

function supprimerEspacesBlancs($chaine) {
    // Utiliser la fonction str_replace pour remplacer les espaces blancs par une chaîne vide
    $chaineSansEspaces = str_replace(' ', '', $chaine);
    return $chaineSansEspaces;
}

// Exemple d'utilisation :
$chaineOriginale = 'Le renard " " brun rapide'; // Vous pouvez changer la valeur pour tester avec d'autres chaînes

$chaineSansEspaces = supprimerEspacesBlancs($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Chaîne sans espaces : $chaineSansEspaces";

?>
