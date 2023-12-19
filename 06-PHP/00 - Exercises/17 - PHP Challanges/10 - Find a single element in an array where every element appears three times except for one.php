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

    // Trouver l'élément qui n'apparaît pas trois fois
    foreach ($compteurMap as $element => $compteur) {
        if ($compteur !== 3) {
            return $element;
        }
    }

    // Si aucun élément unique n'est trouvé, retourner un message approprié
    return "Aucun élément unique trouvé.";
}

// Exemple d'utilisation :
$tableauEntree = [5, 3, 4, 3, 5, 5, 3];
$elementUnique = trouverElementUnique($tableauEntree);

echo "Tableau en entrée : " . implode(", ", $tableauEntree) . "\n"; echo "<br>";
echo "Élément Unique : $elementUnique\n"; echo "<br>";
