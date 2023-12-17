<?php

// Chaîne d'origine
$chaineOriginale = 'The quick brown fox jumps over the lazy dog';

// Diviser la chaîne en mots
$mots = explode(' ', $chaineOriginale);

// Sélectionner les cinq premiers mots
$cinqPremiersMots = implode(' ', array_slice($mots, 0, 5));

// Afficher les cinq premiers mots
echo "Les cinq premiers mots de la phrase sont : $cinqPremiersMots";

?>
