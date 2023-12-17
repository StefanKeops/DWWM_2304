<?php

// Chaîne à vérifier
$chaine = 'The quick brown fox jumps over the lazy dog.';

// Sous-chaîne à rechercher
$sousChaine = 'jumps';

// Vérifier si la chaîne contient la sous-chaîne
if (strpos($chaine, $sousChaine) !== false) {
    echo "La chaîne '$chaine' contient la sous-chaîne '$sousChaine'.";
} else {
    echo "La chaîne '$chaine' ne contient pas la sous-chaîne '$sousChaine'.";
}

?>
