<?php

// Fonction pour générer un tableau à partir d'une chaîne de plage
function genererTableauDePlage($chainePlage)
{
    // Utiliser la fonction explode pour diviser la chaîne en un tableau
    $plage = explode('-', $chainePlage);

    // Vérifier si deux éléments ont été extraits (début et fin de la plage)
    if (count($plage) === 2) {
        // Utiliser la fonction range pour générer un tableau de la plage spécifiée
        $tableauDePlage = range($plage[0], $plage[1]);

        return $tableauDePlage;
    } else {
        // En cas d'erreur ou de plage invalide, retourner un tableau vide
        return array();
    }
}

// Chaîne de plage d'échantillon
$chainePlage = "5-10";

// Appeler la fonction pour générer un tableau à partir de la chaîne de plage
$tableauGenere = genererTableauDePlage($chainePlage);

// Afficher le tableau généré
echo "Tableau généré à partir de la chaîne de plage '$chainePlage' :\n";
print_r($tableauGenere);

?>
