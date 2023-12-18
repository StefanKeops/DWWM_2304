<?php

function quickSort($array) {
    // Si le tableau a 0 ou 1 élément, il est déjà trié
    if (count($array) < 2) {
        return $array;
    }

    // Choisir un pivot (ici, le premier élément)
    $pivot = $array[0];
    
    // Diviser le tableau en deux parties : éléments plus petits que le pivot et éléments plus grands que le pivot
    $left = $right = array();
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    // Récursivement trier les deux parties
    return array_merge(quickSort($left), array($pivot), quickSort($right));
}

// Exemple d'utilisation
$unsortedArray = array(5, 3, 7, 1, 9, 2, 6, 4, 8);
$sortedArray = quickSort($unsortedArray);

// Afficher le tableau trié
echo "Tableau trié :\n";
echo "<br>";
print_r($sortedArray);

?>
