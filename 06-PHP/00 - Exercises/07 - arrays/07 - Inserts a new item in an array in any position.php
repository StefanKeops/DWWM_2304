<?php

// Tableau initial
$monTableau = array('element1', 'element2', 'element3', 'element4');

// Nouvel élément à insérer
$nouvelElement = 'nouvelElement';

// Position d'insertion (par exemple, à la troisième position avec l'indice 2)
$positionInsertion = 2;

// Insérer le nouvel élément à la position spécifiée
array_splice($monTableau, $positionInsertion, 0, $nouvelElement);

// Afficher le tableau après l'insertion
echo "Tableau après l'insertion :<br>";
foreach ($monTableau as $indice => $valeur) {
    echo "Indice : $indice, Valeur : $valeur<br>";
}

?>
