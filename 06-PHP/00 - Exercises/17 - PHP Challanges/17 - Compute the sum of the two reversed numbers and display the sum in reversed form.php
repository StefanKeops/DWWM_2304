<?php

function inverserNombre($nombre)
{
    $nombreInverse = 0;

    while ($nombre > 0) {
        $chiffre = $nombre % 10;
        $nombreInverse = $nombreInverse * 10 + $chiffre;
        $nombre = (int)($nombre / 10);
    }

    return $nombreInverse;
}

function sommeInversee($nombre1, $nombre2)
{
    // Inverser les deux nombres
    $nombreInverse1 = inverserNombre($nombre1);
    $nombreInverse2 = inverserNombre($nombre2);

    // Calculer la somme des nombres inversés
    $somme = $nombreInverse1 + $nombreInverse2;

    // Inverser la somme
    $sommeInversee = inverserNombre($somme);

    return $sommeInversee;
}

// Exemple d'utilisation :
$nombre1 = 13;
$nombre2 = 14;

$sommeInversee = sommeInversee($nombre1, $nombre2);

echo "Nombre 1 : $nombre1\n"; echo "<br>";
echo "Nombre 2 : $nombre2\n"; echo "<br>";
echo "Somme Inversée : $sommeInversee\n"; echo "<br>";
