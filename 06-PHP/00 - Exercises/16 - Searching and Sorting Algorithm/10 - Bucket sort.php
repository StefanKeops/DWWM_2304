<?php
function bucketSort($arr)
{
    $n = count($arr);

    // Trouver la valeur maximale et minimale dans le tableau
    $maxValue = max($arr);
    $minValue = min($arr);

    // Calculer la plage des seaux et la taille de chaque seau
    $range = $maxValue - $minValue + 1;
    $bucketSize = 5; // Vous pouvez ajuster la taille du seau selon vos besoins

    // Initialiser les seaux
    $buckets = array_fill(0, $range, []);

    // Placer chaque élément dans le seau approprié
    foreach ($arr as $value) {
        $bucketIndex = floor(($value - $minValue) / $bucketSize);
        $buckets[$bucketIndex][] = $value;
    }

    // Trier chaque seau individuellement (peut utiliser un autre algorithme de tri)
    foreach ($buckets as &$bucket) {
        sort($bucket);
    }

    // Fusionner les seaux triés pour obtenir le tableau trié final
    $sortedArray = [];
    foreach ($buckets as $bucket) {
        $sortedArray = array_merge($sortedArray, $bucket);
    }

    return $sortedArray;
}

// Exemple d'utilisation
$myArray = [64, 34, 25, 12, 22, 11, 90];
echo "Avant le tri : " . implode(", ", $myArray) . "\n"; echo  "<br>";

$sortedArray = bucketSort($myArray);

echo "Après le tri : " . implode(", ", $sortedArray) . "\n";
?>
