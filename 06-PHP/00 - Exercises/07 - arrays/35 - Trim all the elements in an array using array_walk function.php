<?php

// Fonction de rappel pour élaguer (trim) chaque élément du tableau
function elaguerElements(&$element)
{
    // Utiliser la fonction trim pour élaguer l'élément
    $element = trim($element);
}

// Tableau d'échantillon avec des espaces supplémentaires autour des éléments
$tableau = array("  Pomme  ", "  Banane  ", "  Orange  ");

// Appliquer la fonction array_walk pour élaguer tous les éléments du tableau
array_walk($tableau, 'elaguerElements');

// Afficher le tableau après l'élagage des éléments
echo "Tableau après l'élagage des éléments :\n";
print_r($tableau);

?>
