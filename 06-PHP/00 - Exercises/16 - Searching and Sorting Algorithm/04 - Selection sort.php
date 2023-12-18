<?php
function selectionSort($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        // Trouver l'élément minimum dans la partie non triée du tableau
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Échanger l'élément minimum avec le premier élément non trié
        $temp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
        $arr[$i] = $temp;
    }

    return $arr;
}

// Exemple d'utilisation
$myArray = [64, 25, 12, 22, 11];
echo "Avant le tri : " . implode(", ", $myArray) . "\n";
echo "<br>";

$sortedArray = selectionSort($myArray);

echo "Après le tri : " . implode(", ", $sortedArray) . "\n";
?>
