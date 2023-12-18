<?php
function gnomeSort(&$arr)
{
    $n = count($arr);
    $index = 0;

    while ($index < $n) {
        if ($index == 0 || $arr[$index] >= $arr[$index - 1]) {
            // Si l'élément est en ordre ou s'il est le premier élément, passer à l'élément suivant
            $index++;
        } else {
            // Si l'élément est dans le désordre, échanger avec l'élément précédent
            list($arr[$index], $arr[$index - 1]) = array($arr[$index - 1], $arr[$index]);
            $index--;

            // Assurer que l'indice ne devient pas négatif
            if ($index < 0) {
                $index = 0;
            }
        }
    }
}

// Exemple d'utilisation
$myArray = [64, 34, 25, 12, 22, 11, 90];
echo "Avant le tri : " . implode(", ", $myArray) . "\n"; echo "<br>";

gnomeSort($myArray);

echo "Après le tri : " . implode(", ", $myArray) . "\n";
?>
