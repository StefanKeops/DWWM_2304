<?php

// Fonction pour trier un tableau d'entiers positifs avec l'algorithme Bead-Sort
function beadSort($inputArray)
{
    // Initialiser le tableau de perles
    $beads = array_fill(0, max($inputArray) + 1, 0);

    // Placer une perle pour chaque entier dans le tableau
    foreach ($inputArray as $value) {
        for ($i = 1; $i <= $value; $i++) {
            $beads[$i]++;
        }
    }

    // Reconstruire le tableau trié à partir du tableau de perles
    $sortedArray = array();
    foreach ($beads as $key => $count) {
        for ($i = 0; $i < $count; $i++) {
            $sortedArray[] = $key;
        }
    }

    return $sortedArray;
}

// Tableau d'entrée
$inputArray = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

// Trier le tableau avec l'algorithme Bead-Sort
$sortedArray = beadSort($inputArray);

// Afficher le tableau trié
echo "Tableau trié avec Bead-Sort : " . implode(', ', $sortedArray);

?>
