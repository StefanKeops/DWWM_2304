<?php

class IntegerArraySorter
{
    public static function sortArray($array)
    {
        sort($array);
        return $array;
    }
}

// Utilisation de la classe pour trier un tableau
$integerArray = array(11, -2, 4, 35, 0, 8, -9);
$sortedArray = IntegerArraySorter::sortArray($integerArray);

echo "Tableau trié : " . implode(', ', $sortedArray) . "\n";

?>
