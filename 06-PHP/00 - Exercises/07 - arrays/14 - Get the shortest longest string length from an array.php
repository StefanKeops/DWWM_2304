<?php

// Tableau d'échantillon
$array = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Trouver la longueur de la plus courte chaîne
$longueurPlusCourte = min(array_map('strlen', $array));

// Trouver la longueur de la plus longue chaîne
$longueurPlusLongue = max(array_map('strlen', $array));

// Afficher les résultats
echo "Longueur de la plus courte chaîne : $longueurPlusCourte<br>";
echo "Longueur de la plus longue chaîne : $longueurPlusLongue<br>";

?>
