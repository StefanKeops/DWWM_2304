<?php

// Fonction pour supprimer les valeurs en double d'un tableau de chaînes de caractères ou d'entiers
function supprimerValeursEnDouble($tableau)
{
    // Utiliser la fonction array_unique pour obtenir un tableau sans valeurs en double
    $tableauUnique = array_unique($tableau);

    return $tableauUnique;
}

// Tableau d'échantillon avec des chaînes de caractères
$tableauChaines = array("Pomme", "Banane", "Orange", "Pomme", "Kiwi", "Banane");

// Tableau d'échantillon avec des entiers
$tableauEntiers = array(1, 2, 3, 1, 4, 2, 5);

// Appeler la fonction pour supprimer les valeurs en double des tableaux
$tableauUniqueChaines = supprimerValeursEnDouble($tableauChaines);
$tableauUniqueEntiers = supprimerValeursEnDouble($tableauEntiers);

// Afficher les tableaux uniques résultants
echo "Tableau unique de chaînes de caractères :\n";
print_r($tableauUniqueChaines);

echo "Tableau unique d'entiers :\n";
print_r($tableauUniqueEntiers);

?>
