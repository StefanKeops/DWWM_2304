<?php

// Fonction pour effectuer une différence multidimensionnelle
function differenceMultidimensionnelle($tableau1, $tableau2)
{
    // Utiliser la fonction array_udiff_assoc pour comparer les tableaux de manière personnalisée
    $difference = array_udiff_assoc($tableau1, $tableau2, function ($a, $b) {
        return ($a !== $b) ? 0 : ($a > $b ? 1 : -1);
    });

    return $difference;
}

// Tableaux d'échantillon
$tableau1 = array(
    "a" => 1,
    "b" => 2,
    "c" => 3,
    "d" => 4
);

$tableau2 = array(
    "b" => 2,
    "d" => 4,
    "e" => 5
);

// Appeler la fonction pour obtenir la différence multidimensionnelle
$difference = differenceMultidimensionnelle($tableau1, $tableau2);

// Afficher la différence
echo "Différence multidimensionnelle :\n";
print_r($difference);

?>
