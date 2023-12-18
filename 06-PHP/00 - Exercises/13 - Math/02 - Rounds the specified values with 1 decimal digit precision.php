<?php

// Valeurs à arrondir
$value1 = 1.65;
$value2 = 1.65;
$value3 = -1.54;

// Arrondir les valeurs à 1 chiffre après la virgule
$roundedValue1 = round($value1, 1);
$roundedValue2 = round($value2, 1);
$roundedValue3 = round($value3, 1);

// Afficher les résultats
echo "Valeur 1 arrondie : $roundedValue1\n"; echo "<br>";
echo "Valeur 2 arrondie : $roundedValue2\n"; echo "<br>";
echo "Valeur 3 arrondie : $roundedValue3\n"; echo "<br>";

?>
