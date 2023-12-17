<?php

function supprimerCaracteresNonNumeriques($chaine) {
    // Utiliser la fonction preg_replace pour supprimer les caractères non numériques, à l'exception de la virgule et du point
    $chaineNumerique = preg_replace('/[^0-9,.]/', '', $chaine);
    return $chaineNumerique;
}

// Exemple d'utilisation :
$chaineOriginale = '$123,34.00A'; // Vous pouvez changer la valeur pour tester avec d'autres chaînes

$chaineNumerique = supprimerCaracteresNonNumeriques($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Chaîne numérique : $chaineNumerique";

?>
