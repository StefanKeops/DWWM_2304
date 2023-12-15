<?php

$x = array(1, 2, 3, 4, 5);

// Supprimer un élément (par exemple, le deuxième élément avec l'indice 1)
unset($x[1]);

// Normaliser les clés entières après la suppression
$x = array_values($x);

// Afficher le tableau mis à jour
echo "Tableau après la suppression et normalisation des clés :<br>";
foreach ($x as $key => $value) {
    echo "Clé : $key, Valeur : $value<br>";
}

?>
