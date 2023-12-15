<?php

// Fonction pour retourner le plus petit entier non nul
function plusPetitEntierNonNul($tableau)
{
    // Utiliser la fonction array_filter pour filtrer les éléments non nuls
    $elementsNonNuls = array_filter($tableau, function ($element) {
        return $element !== 0;
    });

    // Utiliser la fonction min pour obtenir le plus petit élément
    $plusPetitEntierNonNul = min($elementsNonNuls);

    return $plusPetitEntierNonNul;
}

// Tableau d'échantillon
$tableau = array(0, 3, 8, 0, -5, 7);

// Appeler la fonction et afficher le résultat
$resultat = plusPetitEntierNonNul($tableau);
echo "Le plus petit entier non nul dans le tableau est : $resultat";

?>
