<?php

function estProgressionGeometrique($sequence)
{
    $longueur = count($sequence);

    // Vérifier si la séquence est vide ou a une seule valeur
    if ($longueur <= 1) {
        return true;
    }

    // Calculer le rapport entre les termes consécutifs
    $rapport = $sequence[1] / $sequence[0];

    // Vérifier si le rapport est constant pour toute la séquence
    for ($i = 2; $i < $longueur; $i++) {
        if (($sequence[$i] / $sequence[$i - 1]) !== $rapport) {
            return false;
        }
    }

    return true;
}

// Exemple d'utilisation :
$sequenceEntree = [2, 6, 18, 54];
$estProgressionGeometrique = estProgressionGeometrique($sequenceEntree);

echo "Séquence en entrée : " . implode(", ", $sequenceEntree) . "\n"; echo "<br>";

if ($estProgressionGeometrique) {
    echo "La séquence est une progression géométrique.\n";
} else {
    echo "La séquence n'est pas une progression géométrique.\n";
}
