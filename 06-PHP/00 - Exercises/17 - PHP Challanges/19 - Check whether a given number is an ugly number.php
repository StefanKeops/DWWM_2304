<?php

function estUglyNumber($nombre)
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

    // Si le nombre résultant est égal à 1, c'est un "ugly number"
    return $nombre == 1;
}

// Exemple d'utilisation :
$nombreEntree = 12;

if (estUglyNumber($nombreEntree)) {
    echo "$nombreEntree est un ugly number.\n";
} else {
    echo "$nombreEntree n'est pas un ugly number.\n";
}
?>
