<?php

function deplacerZerosALaFin($tableau)
{
    $tableauSansZeros = array_filter($tableau, function ($valeur) {
        return $valeur !== 0;
    });

    $zeros = array_fill(0, count($tableau) - count($tableauSansZeros), 0);

    return array_merge($tableauSansZeros, $zeros);
}

// Exemple d'utilisation :
$tableauEntree = [0, 2, 3, 4, 6, 7, 10];
$tableauSortie = deplacerZerosALaFin($tableauEntree);

echo "Tableau d'entrée : [" . implode(", ", $tableauEntree) . "]\n"; echo "<br>";
echo "Tableau de sortie : [" . implode(", ", $tableauSortie) . "]\n"; echo "<br>";
?>
