<?php

function insertionSort(&$array) {
    $n = count($array);

    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        // Déplacer les éléments du tableau[0..$j] qui sont plus grands que $key
        // à une position à l'avant de leur position actuelle
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }

        // Insérer la clé à sa position correcte dans le tableau
        $array[$j + 1] = $key;
    }
}

// Exemple d'utilisation
$unsortedArray = array(5, 3, 7, 1, 9, 2, 6, 4, 8);
insertionSort($unsortedArray);

// Afficher le tableau trié
echo "Tableau trié :\n";
print_r($unsortedArray);

?>
