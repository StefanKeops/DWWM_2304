<?php

function supprimerDernierMot($chaine) {
    // Diviser la chaîne en un tableau de mots
    $mots = explode(' ', $chaine);

    // Supprimer le dernier élément du tableau (le dernier mot)
    array_pop($mots);

    // Rejoindre les mots restants pour former la nouvelle chaîne
    $nouvelleChaine = implode(' ', $mots);

    return $nouvelleChaine;
}

// Exemple d'utilisation :
$chaineOriginale = 'Le renard brun rapide'; // Vous pouvez changer la valeur pour tester avec d'autres chaînes

$nouvelleChaine = supprimerDernierMot($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Nouvelle chaîne sans le dernier mot : $nouvelleChaine";

?>
