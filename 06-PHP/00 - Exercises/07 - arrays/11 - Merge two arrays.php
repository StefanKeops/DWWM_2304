<?php

// Tableaux d'échantillons
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

// Fusionner les tableaux par indice
$resultArray = array();
foreach ($array1 as $index => $subArray) {
    // Vérifier si l'indice existe dans le deuxième tableau
    if (isset($array2[$index])) {
        // Fusionner les deux tableaux par indice
        $resultArray[] = array_merge($subArray, array($array2[$index]));
    } else {
        // Si l'indice n'existe pas dans le deuxième tableau, ajouter simplement le premier tableau
        $resultArray[] = $subArray;
    }
}

// Afficher le résultat
echo "Tableau fusionné par indice :<br>";
foreach ($resultArray as $mergedArray) {
    echo "[" . implode(', ', $mergedArray) . "]<br>";
}

?>
