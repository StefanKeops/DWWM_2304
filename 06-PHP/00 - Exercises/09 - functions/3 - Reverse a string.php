<?php

function inverserChaine($chaine) {
    // Utiliser la fonction strrev pour inverser la chaîne
    $chaineInverse = strrev($chaine);
    return $chaineInverse;
}

// Exemple d'utilisation :
$chaineOriginale = "Bonjour"; // Vous pouvez changer la valeur pour tester avec d'autres chaînes

$chaineInverse = inverserChaine($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Chaîne inversée : $chaineInverse";

?>
