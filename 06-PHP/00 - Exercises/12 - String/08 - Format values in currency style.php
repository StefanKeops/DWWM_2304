<?php

// Valeurs à formater
$value1 = 65.45;
$value2 = 104.35;

// Formater les valeurs en style monétaire
$value1Formatted = number_format($value1, 2, ',', ' ');
$value2Formatted = number_format($value2, 2, ',', ' ');

// Afficher les valeurs formatées
echo "La valeur 1 formatée : $value1Formatted €<br>";
echo "La valeur 2 formatée : $value2Formatted €";

?>
