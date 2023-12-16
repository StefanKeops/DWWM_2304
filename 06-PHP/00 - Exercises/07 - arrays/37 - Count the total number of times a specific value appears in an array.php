<?php

// Tableau d'échantillon
$tableau = array("pomme", "banane", "orange", "pomme", "kiwi", "pomme");

// Valeur spécifique à rechercher
$valeurRecherchee = "pomme";

// Utiliser la fonction array_count_values pour obtenir le nombre d'occurrences de chaque valeur
$occurrences = array_count_values($tableau);

// Récupérer le nombre d'occurrences de la valeur spécifique
$nombreOccurrences = isset($occurrences[$valeurRecherchee]) ? $occurrences[$valeurRecherchee] : 0;

// Afficher le résultat
echo "Le nombre d'occurrences de '$valeurRecherchee' dans le tableau est : $nombreOccurrences\n";

?>
