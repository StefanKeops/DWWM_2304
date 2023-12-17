<?php

// Chaîne d'origine
$chaineOriginale = 'The quick brown fox jumps over the lazy dog///';

// Supprimer la barre oblique finale
$nouvelleChaine = rtrim($chaineOriginale, '/');

// Afficher la nouvelle chaîne
echo "La chaîne après suppression de la barre oblique finale : $nouvelleChaine";

?>
