<?php

// Fonction pour trouver les valeurs uniques dans un tableau multidimensionnel et les aplatisser à une profondeur de 0
function valeursUniquesAplaties($tableau)
{
    // Aplatir le tableau multidimensionnel à une profondeur de 0
    $tableauAplati = iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($tableau)), false);

    // Utiliser la fonction array_unique pour obtenir les valeurs uniques
    $valeursUniques = array_unique($tableauAplati);

    return $valeursUniques;
}

// Tableau d'échantillon multidimensionnel
$tableauMultidimensionnel = array(
    array("a" => 1, "b" => 2, "c" => 1),
    array("d" => 3, "e" => 2, "f" => 1),
    array("g" => 1, "h" => 4, "i" => 2)
);

// Appeler la fonction pour obtenir les valeurs uniques aplaties à une profondeur de 0
$valeursUniquesAplaties = valeursUniquesAplaties($tableauMultidimensionnel);

// Afficher les valeurs uniques aplaties
echo "Valeurs uniques aplaties à une profondeur de 0 :\n";
print_r($valeursUniquesAplaties);

?>
