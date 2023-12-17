<?php

// a) Transformer une chaîne en majuscules
$chaineMinuscules = "Bonjour le Monde!";
$chaineMajuscules = strtoupper($chaineMinuscules);

echo "a) Chaîne en majuscules : $chaineMajuscules<br>";

// b) Transformer une chaîne en minuscules
$chaineMajuscules = "BONJOUR LE MONDE!";
$chaineMinuscules = strtolower($chaineMajuscules);

echo "b) Chaîne en minuscules : $chaineMinuscules<br>";

// c) Mettre la première lettre d'une chaîne en majuscules
$chaineMinuscules = "bonjour le monde!";
$chainePremiereMajuscule = ucfirst($chaineMinuscules);

echo "c) Première lettre en majuscules : $chainePremiereMajuscule<br>";

// d) Mettre la première lettre de chaque mot en majuscules
$chaineMinuscules = "bonjour le monde!";
$chaineMotsMajuscules = ucwords($chaineMinuscules);

echo "d) Première lettre de chaque mot en majuscules : $chaineMotsMajuscules<br>";

?>
