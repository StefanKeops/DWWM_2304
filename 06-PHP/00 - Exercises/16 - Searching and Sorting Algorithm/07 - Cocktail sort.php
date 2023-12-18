<?php
function cocktailSort(&$arr)
{
    $n = count($arr);
    $swapped = true;
    $start = 0;
    $end = $n - 1;

    while ($swapped) {
        // Effectuer un passage de gauche à droite (comme dans le tri à bulles)
        $swapped = false;
        for ($i = $start; $i < $end; ++$i) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
                $swapped = true;
            }
        }

        // Si aucune paire d'éléments n'a été échangée, le tableau est trié
        if (!$swapped) {
            break;
        }

        // Réduire la zone triée de la droite
        $end--;

        // Effectuer un passage de droite à gauche
        $swapped = false;
        for ($i = $end - 1; $i >= $start; --$i) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
                $swapped = true;
            }
        }

        // Augmenter la zone triée de la gauche
        $start++;
    }
}

// Exemple d'utilisation
$myArray = [64, 34, 25, 12, 22, 11, 90];
echo "Avant le tri : " . implode(", ", $myArray) . "\n";
echo "<br>";

cocktailSort($myArray);

echo "Après le tri : " . implode(", ", $myArray) . "\n";
?>
