<?php

// Chaîne à diviser
$chaine = '082307';

// Diviser la chaîne en morceaux
$morceaux = str_split($chaine);

// Afficher les morceaux
echo "La chaîne '$chaine' divisée en morceaux est : " . implode(', ', $morceaux);

?>
