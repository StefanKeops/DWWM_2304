<?php

function trouverElementUnique($tableau)
{
    $compteurMap = [];

    // Compter les occurrences de chaque élément dans le tableau
    foreach ($tableau as $element) {
        if (isset($compteurMap[$element])) {
            $compteurMap[$element]++;
        } else {
            $compteurMap[$element] = 1;
        }
    }

    // Trouver l'élément qui n'apparaît pas deux fois
    foreach ($compteurMap as $element => $compteur) {
        if ($compteur !== 2) {
            return $element;
        }
    }

    // Si aucun élément unique n'est trouvé, retourner un message approprié
    return "Aucun élément unique trouvé.";
}

// Exemple d'utilisation :
$tableauEntree = [5, 3, 0, 3, 0, 5, 7, 7, 9];
$elementUnique = trouverElementUnique($tableauEntree);

echo "Tableau en entrée : " . implode(", ", $tableauEntree) . "\n"; echo "<br>";
echo "Élément Unique : $elementUnique\n"; echo "<br>";
