<?php

function estToutEnMinuscules($chaine) {
    // Utiliser la fonction ctype_lower pour vérifier si tous les caractères sont en minuscules
    return ctype_lower($chaine);
}

// Exemple d'utilisation :
$chaine1 = "bonjour"; // Chaîne en minuscules
$chaine2 = "Bonjour"; // Chaîne avec une majuscule

if (estToutEnMinuscules($chaine1)) {
    echo "$chaine1 est entièrement en minuscules.";
} else {
    echo "$chaine1 n'est pas entièrement en minuscules.";
}

echo "<br>";

if (estToutEnMinuscules($chaine2)) {
    echo "$chaine2 est entièrement en minuscules.";
} else {
    echo "$chaine2 n'est pas entièrement en minuscules.";
}

?>
