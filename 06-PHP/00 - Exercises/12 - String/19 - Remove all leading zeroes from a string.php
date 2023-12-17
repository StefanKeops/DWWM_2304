<?php

// Chaîne d'origine
$chaineOriginale = '000547023.24';

// Supprimer les zéros non significatifs
$chaineSansZeros = ltrim($chaineOriginale, '0');

// Afficher la nouvelle chaîne
echo "La chaîne après suppression des zéros non significatifs : $chaineSansZeros";

?>
