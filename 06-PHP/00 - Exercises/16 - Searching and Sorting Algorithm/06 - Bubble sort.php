<?php
function bubbleSort(&$arr)
{
    $n = count($arr);

    // Effectuer des passes à travers le tableau
    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;

        // Comparer les éléments adjacents et les échanger s'ils sont dans le mauvais ordre
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Échanger les éléments
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;

                $swapped = true;
            }
        }

        // Si aucune paire d'éléments n'a été échangée, le tableau est trié
        if (!$swapped) {
            break;
        }
    }
}

// Exemple d'utilisation
$myArray = [64, 34, 25, 12, 22, 11, 90];
echo "Avant le tri : " . implode(", ", $myArray) . "\n"; echo "<br>";

bubbleSort($myArray);

echo "Après le tri : " . implode(", ", $myArray) . "\n";
?>
