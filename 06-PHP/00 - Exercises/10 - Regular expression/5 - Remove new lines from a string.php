<?php

function supprimerSautsDeLigne($chaine) {
    // Utiliser la fonction str_replace pour remplacer les sauts de ligne par une chaîne vide
    $chaineSansSauts = str_replace("\n", '', $chaine);
    return $chaineSansSauts;
}

// Exemple d'utilisation :
$chaineOriginale = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

$chaineSansSauts = supprimerSautsDeLigne($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Chaîne sans sauts de ligne : $chaineSansSauts";

?>
