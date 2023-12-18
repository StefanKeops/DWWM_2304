<?php
function combSort(&$arr)
{
    $n = count($arr);

    // Initialiser la taille du pas
    $gap = $n;
    $shrink = 1.3;
    $swapped = true;

    while ($gap > 1 || $swapped) {
        // Mettre à jour la taille du pas
        $gap = max(1, floor($gap / $shrink));

        // Initialiser le drapeau d'échange pour cette itération
        $swapped = false;

        // Effectuer des comparaisons et des échanges avec la taille du pas actuelle
        for ($i = 0; $i + $gap < $n; $i++) {
            if ($arr[$i] > $arr[$i + $gap]) {
                // Échanger les éléments
                list($arr[$i], $arr[$i + $gap]) = array($arr[$i + $gap], $arr[$i]);
                $swapped = true;
            }
        }
    }
}

// Exemple d'utilisation
$myArray = [64, 34, 25, 12, 22, 11, 90];
echo "Avant le tri : " . implode(", ", $myArray) . "\n";
echo "<br>";

combSort($myArray);

echo "Après le tri : " . implode(", ", $myArray) . "\n";
?>
