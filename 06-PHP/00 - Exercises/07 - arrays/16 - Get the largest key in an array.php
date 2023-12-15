<?php

// Fonction pour obtenir la plus grande clé dans un tableau
function plusGrandeCle($tableau)
{
    // Vérifier si le tableau est vide
    if (empty($tableau)) {
        return "Le tableau est vide.";
    }

    // Utiliser la fonction max pour obtenir la plus grande clé
    $plusGrandeCle = max(array_keys($tableau));

    return $plusGrandeCle;
}

// Tableau d'échantillon
$tableau = array(
    'a' => 'valeur1',
    'b' => 'valeur2',
    'c' => 'valeur3',
    'd' => 'valeur4'
);

// Obtenir la plus grande clé dans le tableau
$resultat = plusGrandeCle($tableau);

// Afficher le résultat
echo "La plus grande clé dans le tableau est : $resultat";

?>
