<?php

// Générer une chaîne aléatoire de 11 caractères
$caracteresPermis = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$longueurChaine = 11;
$chaineAleatoire = '';

for ($i = 0; $i < $longueurChaine; $i++) {
    $indexAleatoire = rand(0, strlen($caracteresPermis) - 1);
    $chaineAleatoire .= $caracteresPermis[$indexAleatoire];
}

// Afficher la chaîne aléatoire
echo "Chaîne aléatoire de 11 caractères : $chaineAleatoire";

?>
