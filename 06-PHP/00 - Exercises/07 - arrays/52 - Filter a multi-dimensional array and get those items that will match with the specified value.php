<?php

// Fonction pour filtrer un tableau multidimensionnel par valeur
function filtrerParValeur($tableau, $valeurFiltre)
{
    // Utiliser la fonction array_filter pour filtrer les éléments du tableau
    $resultat = array_filter($tableau, function ($element) use ($valeurFiltre) {
        // Utiliser in_array pour vérifier si la valeur est présente dans l'élément du tableau
        return in_array($valeurFiltre, $element);
    });

    return $resultat;
}

// Tableau multidimensionnel d'échantillon
$tableauMultidimensionnel = array(
    array("nom" => "John", "age" => 25, "ville" => "Paris"),
    array("nom" => "Jane", "age" => 30, "ville" => "Londres"),
    array("nom" => "Alice", "age" => 28, "ville" => "New York")
);

// Valeur à filtrer
$valeurFiltre = "Paris";

// Appeler la fonction pour filtrer le tableau multidimensionnel par valeur
$resultat = filtrerParValeur($tableauMultidimensionnel, $valeurFiltre);

// Afficher le résultat
echo "Éléments filtrés du tableau multidimensionnel :\n";
print_r($resultat);

?>
