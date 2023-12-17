<?php

// Chaîne d'origine
$chaineOriginale = 'The brown fox';

// Chaîne à insérer
$chaineAInserer = 'quick';

// Position d'insertion
$positionInsertion = 4; // La position après 'The'

// Insérer la chaîne à la position spécifiée
$nouvelleChaine = substr_replace($chaineOriginale, $chaineAInserer.' ', $positionInsertion, 0);

// Afficher la nouvelle chaîne
echo "La nouvelle chaîne après insertion : $nouvelleChaine";

?>
