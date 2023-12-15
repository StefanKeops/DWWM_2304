<?php

// Tableau associatif initial
$monTableau = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

// a) Trier en ordre croissant par valeur
asort($monTableau);

echo "a) Tri en ordre croissant par valeur :<br>";
afficherTableau($monTableau);

// b) Trier en ordre croissant par clé
ksort($monTableau);

echo "<br>b) Tri en ordre croissant par clé :<br>";
afficherTableau($monTableau);

// c) Trier en ordre décroissant par valeur
arsort($monTableau);

echo "<br>c) Tri en ordre décroissant par valeur :<br>";
afficherTableau($monTableau);

// d) Trier en ordre décroissant par clé
krsort($monTableau);

echo "<br>d) Tri en ordre décroissant par clé :<br>";
afficherTableau($monTableau);

// Fonction pour afficher le tableau
function afficherTableau($tableau)
{
    foreach ($tableau as $cle => $valeur) {
        echo "Clé : $cle, Valeur : $valeur<br>";
    }
}

?>
