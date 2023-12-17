<?php

// Chaîne d'origine
$chaineOriginale = 'The quick brown fox jumps over the lazy dog';

// Partie à supprimer
$partieASupprimer = 'fox';

// Supprimer la partie de la chaîne
$nouvelleChaine = str_replace($partieASupprimer, '', $chaineOriginale);

// Afficher la nouvelle chaîne
echo "La chaîne après suppression de '$partieASupprimer' : $nouvelleChaine";

?>
