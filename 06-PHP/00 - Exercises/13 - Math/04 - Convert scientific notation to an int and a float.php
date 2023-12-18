<?php

// Notation scientifique
$scientificNotation = '4.5e3';

// Convertir en entier
$integerValue = (int)$scientificNotation;

// Convertir en nombre à virgule flottante
$floatValue = (float)$scientificNotation;

// Afficher les résultats
echo "Notation scientifique : $scientificNotation\n"; echo "<br>";
echo "Valeur entière : $integerValue\n"; echo "<br>";
echo "Valeur à virgule flottante : $floatValue\n"; echo "<br>";

?>
