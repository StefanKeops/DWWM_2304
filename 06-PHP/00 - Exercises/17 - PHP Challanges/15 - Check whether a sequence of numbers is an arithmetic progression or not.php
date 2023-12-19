<?php

function estProgressionArithmetique($sequence)
{
    $longueur = count($sequence);

    // Vérifier si la séquence est vide ou a une seule valeur
    if ($longueur <= 1) {
        return true;
    }

    // Calculer la différence entre les termes consécutifs
    $difference = $sequence[1] - $sequence[0];

    // Vérifier si la différence est constante pour toute la séquence
    for ($i = 2; $i < $longueur; $i++) {
        if (($sequence[$i] - $sequence[$i - 1]) !== $difference) {
            return false;
        }
    }

    return true;
}

// Exemple d'utilisation :
$sequenceEntree = [5, 7, 9, 11];
$estProgressionArithmetique = estProgressionArithmetique($sequenceEntree);

echo "Séquence en entrée : " . implode(", ", $sequenceEntree) . "\n"; echo "<br>";

if ($estProgressionArithmetique) {
    echo "La séquence est une progression arithmétique.\n";
} else {
    echo "La séquence n'est pas une progression arithmétique.\n";
}
