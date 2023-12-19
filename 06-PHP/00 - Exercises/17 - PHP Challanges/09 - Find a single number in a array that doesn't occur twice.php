<?php

function trouverNombreUnique($tableau)
{
    $carteComptage = [];

    // Compter les occurrences de chaque nombre dans le tableau
    foreach ($tableau as $nombre) {
        if (isset($carteComptage[$nombre])) {
            $carteComptage[$nombre]++;
        } else {
            $carteComptage[$nombre] = 1;
        }
    }

    // Trouver le nombre qui n'apparaît qu'une seule fois
    foreach ($carteComptage as $nombre => $compteur) {
        if ($compteur === 1) {
            return $nombre;
        }
    }

    // Si aucun nombre unique n'est trouvé, retourner un message approprié
    return "Aucun nombre unique trouvé.";
}

// Exemple d'utilisation :
$tableauEntree = [5, 3, 4, 3, 4];
$nombreUnique = trouverNombreUnique($tableauEntree);

echo "Tableau en entrée : " . implode(", ", $tableauEntree) . "\n"; echo "<br>";
echo "Nombre Unique : $nombreUnique\n"; echo "<br>";
