<?php

function afficherCopyright($startYear, $owner) {
    // Utiliser la fonction date() pour obtenir l'année actuelle
    $currentYear = date('Y');

    // Afficher l'information de copyright dans le format attendu
    echo "© $startYear-$currentYear $owner";
}

// Exemple d'utilisation :
$anneeDebut = 2013; // Vous pouvez changer la valeur pour ajuster l'année de début
$proprietaire = "PHP Exercises - w3resource"; // Vous pouvez changer la valeur pour ajuster le propriétaire

afficherCopyright($anneeDebut, $proprietaire);

?>
