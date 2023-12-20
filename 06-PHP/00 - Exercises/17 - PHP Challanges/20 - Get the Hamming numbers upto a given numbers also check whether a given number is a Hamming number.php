<?php

function estNombreHamming($nombre)
{
    if ($nombre <= 0) {
        return false;
    }

    // Diviser par 2, 3 et 5 autant que possible
    while ($nombre % 2 == 0) {
        $nombre /= 2;
    }
    while ($nombre % 3 == 0) {
        $nombre /= 3;
    }
    while ($nombre % 5 == 0) {
        $nombre /= 5;
    }

    // Si le nombre résultant est égal à 1, c'est un nombre de Hamming
    return $nombre == 1;
}

function obtenirNombresHammingJusqua($limite)
{
    $nombresHamming = [];
    $nombreActuel = 1;
    $index = 0;

    while ($index < $limite) {
        if (estNombreHamming($nombreActuel)) {
            $nombresHamming[] = $nombreActuel;
            $index++;
        }
        $nombreActuel++;
    }

    return $nombresHamming;
}

// Exemple d'utilisation :
$limite = 10;
$nombresHamming = obtenirNombresHammingJusqua($limite);

echo "Nombres de Hamming jusqu'à $limite : " . implode(", ", $nombresHamming) . "\n"; echo "<br>";

$nombreTest = 1;

if (estNombreHamming($nombreTest)) {
    echo "$nombreTest est un nombre de Hamming.\n";
} else {
    echo "$nombreTest n'est pas un nombre de Hamming.\n";
}
?>
