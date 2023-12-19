<?php

function inverserChiffres($nombre)
{
    $chiffresInverses = 0;

    while ($nombre > 0) {
        $chiffre = $nombre % 10;
        $chiffresInverses = $chiffresInverses * 10 + $chiffre;
        $nombre = (int)($nombre / 10);
    }

    return $chiffresInverses;
}

// Exemple d'utilisation :
$nombreEntree = 12345;
$chiffresInverses = inverserChiffres($nombreEntree);

echo "Nombre en entrée : $nombreEntree\n"; echo "<br>";
echo "Chiffres inversés : $chiffresInverses\n"; echo "<br>";
