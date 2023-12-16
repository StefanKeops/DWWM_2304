<?php

// Tableau d'échantillon
$tableau = array("Banane", "Orange", "Pomme", "Fraise", "Kiwi");

// Utiliser la fonction de tri pour obtenir un tableau trié sans conserver les clés
$tableauTriSansCles = array_values($tableau);
sort($tableauTriSansCles);

// Afficher le tableau trié sans conserver les clés
echo "Tableau trié sans conserver les clés :\n";
print_r($tableauTriSansCles);

?>
