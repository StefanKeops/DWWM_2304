<?php

// Fonction pour effectuer l'union de deux tableaux
function unionDeuxTableaux($tableau1, $tableau2)
{
    // Utiliser l'opérateur + pour obtenir l'union des tableaux
    $union = $tableau1 + $tableau2;

    return $union;
}

// Deux tableaux d'échantillon
$tableau1 = array("a" => 1, "b" => 2, "c" => 3);
$tableau2 = array("b" => 4, "d" => 5, "e" => 6);

// Appeler la fonction pour obtenir l'union des deux tableaux
$resultat = unionDeuxTableaux($tableau1, $tableau2);

// Afficher le résultat
echo "Union des deux tableaux :\n";
print_r($resultat);

?>
