<?php
function countingSort($arr)
{
    $n = count($arr);

    // Trouver la valeur maximale pour déterminer la plage des clés
    $maxValue = max($arr);

    // Initialiser un tableau pour compter le nombre d'occurrences de chaque clé
    $count = array_fill(0, $maxValue + 1, 0);

    // Compter le nombre d'occurrences de chaque clé
    foreach ($arr as $value) {
        $count[$value]++;
    }

    // Calculer les positions de départ de chaque clé dans le tableau trié
    for ($i = 1; $i <= $maxValue; $i++) {
        $count[$i] += $count[$i - 1];
    }

    // Initialiser le tableau trié
    $sortedArray = array_fill(0, $n, 0);

    // Placer chaque élément dans sa position triée dans le tableau final
    for ($i = $n - 1; $i >= 0; $i--) {
        $value = $arr[$i];
        $position = $count[$value] - 1;
        $sortedArray[$position] = $value;
        $count[$value]--;
    }

    return $sortedArray;
}

// Exemple d'utilisation
$myArray = [4, 2, 8, 3, 6, 1, 5, 7];
echo "Avant le tri : " . implode(", ", $myArray) . "\n"; echo  "<br>";

$sortedArray = countingSort($myArray);

echo "Après le tri : " . implode(", ", $sortedArray) . "\n";
?>
