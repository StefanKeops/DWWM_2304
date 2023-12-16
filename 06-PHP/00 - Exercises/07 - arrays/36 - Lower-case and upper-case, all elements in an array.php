<?php

// Tableau d'échantillon
$tableau = array("Pomme", "Banane", "Orange");

// Fonction pour convertir tous les éléments en minuscules et majuscules
function convertirMinusculesMajuscules(&$element)
{
    // Convertir en minuscules
    $element = strtolower($element);

    // Convertir en majuscules
    $element = strtoupper($element);
}

// Appliquer la fonction array_walk pour convertir tous les éléments
array_walk($tableau, 'convertirMinusculesMajuscules');

// Afficher le tableau après la conversion
echo "Tableau après la conversion minuscules/majuscules :\n";
print_r($tableau);

?>
