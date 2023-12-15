<?php

// Températures enregistrées
$tempEnregistrees = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);

// Calculer la température moyenne
$moyenne = round(array_sum($tempEnregistrees) / count($tempEnregistrees), 2);

// Trier le tableau de températures par ordre croissant
sort($tempEnregistrees);

// Obtenir les cinq températures les plus basses et les plus élevées
$cinqPlusBasses = array_slice($tempEnregistrees, 0, 5);
$cinqPlusElevees = array_slice($tempEnregistrees, -5);

// Afficher les résultats
echo "Température moyenne : $moyenne<br>";

echo "Cinq températures les plus basses : " . implode(", ", $cinqPlusBasses) . "<br>";

echo "Cinq températures les plus élevées : " . implode(", ", $cinqPlusElevees) . "<br>";

?>
