<?php

// Chaîne numérique d'origine
$chaineNumerique = '2,543.12';

// Supprimer la ou les virgules
$chaineSansVirgule = str_replace(',', '', $chaineNumerique);

// Afficher la nouvelle chaîne
echo "La chaîne numérique après suppression de la ou des virgules : $chaineSansVirgule";

?>
