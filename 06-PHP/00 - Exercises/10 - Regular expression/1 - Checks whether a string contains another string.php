<?php

function contientChaine($chainePrincipale, $chaineAChercher) {
    // Utiliser la fonction stripos pour vérifier la présence de la sous-chaîne (insensible à la casse)
    return stripos($chainePrincipale, $chaineAChercher) !== false;
}

// Exemple d'utilisation :
$chainePrincipale = "Bonjour tout le monde";
$chaineAChercher1 = "tout"; // Cette chaîne est présente dans $chainePrincipale
$chaineAChercher2 = "au revoir"; // Cette chaîne n'est pas présente dans $chainePrincipale

if (contientChaine($chainePrincipale, $chaineAChercher1)) {
    echo "$chainePrincipale contient la chaîne \"$chaineAChercher1\".";
} else {
    echo "$chainePrincipale ne contient pas la chaîne \"$chaineAChercher1\".";
}

echo "<br>";

if (contientChaine($chainePrincipale, $chaineAChercher2)) {
    echo "$chainePrincipale contient la chaîne \"$chaineAChercher2\".";
} else {
    echo "$chainePrincipale ne contient pas la chaîne \"$chaineAChercher2\".";
}

?>
