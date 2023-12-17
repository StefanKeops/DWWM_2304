<?php

function supprimerCaracteresNonAlphanumeriques($chaine) {
    // Utiliser la fonction preg_replace pour supprimer les caractères non a-z, A-Z, 0-9, ou espace
    $chaineNettoyee = preg_replace('/[^a-zA-Z0-9 ]/', '', $chaine);
    return $chaineNettoyee;
}

// Exemple d'utilisation :
$chaineOriginale = 'abcde$ddfd @abcd )der]'; // Vous pouvez changer la valeur pour tester avec d'autres chaînes

$chaineNettoyee = supprimerCaracteresNonAlphanumeriques($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Chaîne nettoyée : $chaineNettoyee";

?>
