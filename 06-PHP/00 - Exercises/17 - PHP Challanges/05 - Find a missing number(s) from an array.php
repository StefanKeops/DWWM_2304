<?php

function trouverNombresManquants($tableau)
{
    $valeurMin = min($tableau);
    $valeurMax = max($tableau);
    $nombresManquants = [];

    for ($i = $valeurMin; $i <= $valeurMax; $i++) {
        if (!in_array($i, $tableau)) {
            $nombresManquants[] = $i;
        }
    }

    return $nombresManquants;
}

// Exemple d'utilisation :
$tableauEntree = [1, 2, 3, 6, 7, 8];
$nombresManquants = trouverNombresManquants($tableauEntree);

echo "Tableau en entrée : " . implode(", ", $tableauEntree) . "\n"; echo "<br>";
echo "Nombre(s) manquant(s) : " . (empty($nombresManquants) ? "Aucun" : implode(", ", $nombresManquants)) . "\n";
