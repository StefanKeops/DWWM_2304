<?php

function inverserBits($entier)
{
    $entierInverse = 0;
    $bits = 32;

    for ($i = 0; $i < $bits; $i++) {
        $bitCourant = ($entier >> $i) & 1;
        $entierInverse |= ($bitCourant << ($bits - 1 - $i));
    }

    return $entierInverse;
}

// Exemple d'utilisation :
$entierEntree = 1234;
$entierInverse = inverserBits($entierEntree);

echo "Entier en entrée : $entierEntree\n"; echo "<br>";
echo "Bits inversés : $entierInverse\n"; echo "<br>";
