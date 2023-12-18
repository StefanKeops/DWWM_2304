<?php
function radixSort($arr)
{
    // Trouver la valeur maximale pour déterminer le nombre de chiffres
    $maxValue = max($arr);
    $exp = 1; // Initialiser le chiffre le moins significatif

    // Appliquer le tri par base pour chaque chiffre
    while ($maxValue / $exp > 0) {
        countingSortForRadix($arr, $exp);
        $exp *= 10; // Passer au chiffre suivant
    }

    return $arr;
}

function countingSortForRadix(&$arr, $exp)
{
    $n = count($arr);
    $output = array_fill(0, $n, 0);
    $count = array_fill(0, 10, 0);

    // Compter le nombre d'occurrences de chaque chiffre à la position donnée
    for ($i = 0; $i < $n; $i++) {
        $index = floor($arr[$i] / $exp) % 10;
        $count[$index]++;
    }

    // Calculer les positions de départ de chaque chiffre
    for ($i = 1; $i < 10; $i++) {
        $count[$i] += $count[$i - 1];
    }

    // Construire le tableau trié
    for ($i = $n - 1; $i >= 0; $i--) {
        $index = floor($arr[$i] / $exp) % 10;
        $output[$count[$index] - 1] = $arr[$i];
        $count[$index]--;
    }

    // Copier le tableau trié dans le tableau d'origine
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = $output[$i];
    }
}

// Exemple d'utilisation
$myArray = [170, 45, 75, 90, 802, 24, 2, 66];
echo "Avant le tri : " . implode(", ", $myArray) . "\n"; echo "<br>";

$sortedArray = radixSort($myArray);

echo "Après le tri : " . implode(", ", $sortedArray) . "\n";
?>
