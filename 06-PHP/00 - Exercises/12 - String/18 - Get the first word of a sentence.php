<?php

// Chaîne d'origine
$phraseOriginale = 'The quick brown fox';

// Diviser la phrase en mots
$mots = explode(' ', $phraseOriginale);

// Récupérer le premier mot
$premierMot = isset($mots[0]) ? $mots[0] : '';

// Afficher le premier mot
echo "Le premier mot de la phrase est : $premierMot";

?>
