<?php

function heapify(&$array, $n, $i) {
    $largest = $i;
    $left = 2 * $i + 1;
    $right = 2 * $i + 2;

    if ($left < $n && $array[$left] > $array[$largest]) {
        $largest = $left;
    }

    if ($right < $n && $array[$right] > $array[$largest]) {
        $largest = $right;
    }

    if ($largest != $i) {
        // Échanger $array[$i] et $array[$largest]
        list($array[$i], $array[$largest]) = array($array[$largest], $array[$i]);

        // Appeler récursivement heapify sur le sous-arbre affecté
        heapify($array, $n, $largest);
    }
}

function heapSort(&$array) {
    $n = count($array);

    // Construire un tas (heap)
    for ($i = floor($n / 2) - 1; $i >= 0; $i--) {
        heapify($array, $n, $i);
    }

    // Extraire les éléments un par un du tas
    for ($i = $n - 1; $i >= 0; $i--) {
        // Échanger $array[0] et $array[$i]
        list($array[0], $array[$i]) = array($array[$i], $array[0]);

        // Appeler heapify sur le tas réduit
        heapify($array, $i, 0);
    }
}

// Exemple d'utilisation
$unsortedArray = array(5, 3, 7, 1, 9, 2, 6, 4, 8);
heapSort($unsortedArray);

// Afficher le tableau trié
echo "Tableau trié :\n";
print_r($unsortedArray);

?>
