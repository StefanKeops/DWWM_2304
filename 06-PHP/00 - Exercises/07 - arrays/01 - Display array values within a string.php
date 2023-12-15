<?php

$color = array('white', 'green', 'red', 'blue', 'black');

// Chaîne de caractères originale
$chaineOriginale = "Le souvenir de cette scène pour moi est comme une image de film figée à jamais à ce moment-là : le tapis rouge, la pelouse verte, la maison blanche, le ciel plombé. Le nouveau président et sa première dame. - Richard M. Nixon";

// Remplacer les mots 'red', 'green' et 'white' par les couleurs du tableau $color
$chaineRemplacee = str_replace(array('red', 'green', 'white'), $color, $chaineOriginale);

// Afficher le résultat
echo $chaineRemplacee;

?>
