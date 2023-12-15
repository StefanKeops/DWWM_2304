<?php

// Fonction pour arrondir les nombres décimaux avec précision
function arrondirDecimal($nombre, $precision, $separateur)
{
    // Utiliser la fonction number_format pour arrondir avec précision et gérer le séparateur
    $nombreArrondi = number_format($nombre, $precision, '.', $separateur);

    return $nombreArrondi;
}

// Exemples
$nombre1 = 1.155;
$precision1 = 2;
$separateur1 = ".";

$nombre2 = 100.25781;
$precision2 = 4;
$separateur2 = ".";

$nombre3 = -2.9636;
$precision3 = 3;
$separateur3 = ".";

// Appeler la fonction pour chaque exemple et afficher les résultats
$resultat1 = arrondirDecimal($nombre1, $precision1, $separateur1);
$resultat2 = arrondirDecimal($nombre2, $precision2, $separateur2);
$resultat3 = arrondirDecimal($nombre3, $precision3, $separateur3);

echo "Résultat 1 : $resultat1<br>";
echo "Résultat 2 : $resultat2<br>";
echo "Résultat 3 : $resultat3<br>";

?>
