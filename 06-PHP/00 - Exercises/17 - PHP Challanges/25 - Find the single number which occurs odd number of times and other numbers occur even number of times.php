<?php

function trouverNombreImpairDeFois($tableau)
{
    $occurrences = array_count_values($tableau);

    foreach ($occurrences as $nombre => $frequence) {
        if ($frequence % 2 !== 0) {
            return $nombre;
        }
    }

    return null;
}

// Exemple d'utilisation :
$tableauEntree = [4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4];
$nombreImpairDeFois = trouverNombreImpairDeFois($tableauEntree);

echo "Tableau d'entrée : [" . implode(", ", $tableauEntree) . "]\n"; echo "<br>";

if ($nombreImpairDeFois !== null) {
    echo "Le seul nombre qui apparaît un nombre impair de fois est : $nombreImpairDeFois\n"; echo "<br>";
} else {
    echo "Aucun nombre ne semble apparaître un nombre impair de fois dans le tableau.\n"; echo "<br>";
}
?>
