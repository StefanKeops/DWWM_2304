<?php

// Chaîne à traiter
$chaine = 'rayy@example.com';

// Générer un hex dump de la chaîne
$hexDump = bin2hex($chaine);

// Afficher l'hex dump
echo "Hex dump de la chaîne '$chaine' : $hexDump";

?>
