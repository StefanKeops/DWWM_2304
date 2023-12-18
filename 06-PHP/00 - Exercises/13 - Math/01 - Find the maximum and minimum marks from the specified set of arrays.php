<?php

// Tableaux d'échantillons
$marks1 = array(360, 310, 310, 330, 313, 375, 456, 111, 256);
$marks2 = array(350, 340, 356, 330, 321);
$marks3 = array(630, 340, 570, 635, 434, 255, 298);

// Trouver la note maximale et minimale pour chaque ensemble de notes
$max1 = max($marks1);
$min1 = min($marks1);

$max2 = max($marks2);
$min2 = min($marks2);

$max3 = max($marks3);
$min3 = min($marks3);

// Afficher les résultats
echo "Pour le tableau 1 : Max = $max1, Min = $min1\n"; echo "<br>";
echo "Pour le tableau 2 : Max = $max2, Min = $min2\n"; echo "<br>";
echo "Pour le tableau 3 : Max = $max3, Min = $min3\n"; echo "<br>";

?>
