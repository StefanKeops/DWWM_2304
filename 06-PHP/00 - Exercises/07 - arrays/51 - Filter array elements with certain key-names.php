<?php

// Fonction pour filtrer les éléments du tableau en fonction des noms de clés spécifiques
function filtrerParCles($tableau, $clesAutorisees)
{
    // Utiliser la fonction array_intersect_key pour obtenir les éléments avec les clés autorisées
    $resultat = array_intersect_key($tableau, array_flip($clesAutorisees));

    return $resultat;
}

// Tableau d'échantillon
$tableau = array(
    "nom" => "John",
    "age" => 25,
    "ville" => "Paris",
    "pays" => "France",
    "langue" => "Français"
);

// Clés autorisées à conserver
$clesAutorisees = array("nom", "ville", "langue");

// Appeler la fonction pour filtrer les éléments du tableau en fonction des clés autorisées
$resultat = filtrerParCles($tableau, $clesAutorisees);

// Afficher le résultat
echo "Éléments filtrés du tableau :\n";
print_r($resultat);

?>
