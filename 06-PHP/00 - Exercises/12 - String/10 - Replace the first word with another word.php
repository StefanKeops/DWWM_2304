<?php

// Chaîne à traiter
$chaine = 'the quick brown fox jumps over the lazy dog.';

// Remplacer le premier "the" par "That"
$nouvelleChaine = preg_replace('/\bthe\b/', 'That', $chaine, 1);

// Afficher la nouvelle chaîne
echo "La nouvelle chaîne est : $nouvelleChaine";

?>
