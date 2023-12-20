<?php

function conjectureCollatz($nombre)
{
    echo "Séquence de Collatz pour n = $nombre : ";
    echo "<br>";

    while ($nombre != 1) {
        echo "$nombre, ";

        // Si le nombre est pair, divisez-le par 2
        if ($nombre % 2 == 0) {
            $nombre = $nombre / 2;
        } else {
            // Si le nombre est impair, multipliez-le par 3 et ajoutez 1
            $nombre = 3 * $nombre + 1;
        }
    }

    echo "1\n";
}

// Exemple d'utilisation :
$nombreEntree = 12;
conjectureCollatz($nombreEntree); echo "<br>";

$nombreEntree2 = 19;
conjectureCollatz($nombreEntree2);
?>
