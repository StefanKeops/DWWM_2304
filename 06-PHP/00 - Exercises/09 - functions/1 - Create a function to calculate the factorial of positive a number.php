<?php

function factorielle($n) {
    // Vérifier si le nombre est négatif
    if ($n < 0) {
        return "Veuillez entrer un nombre non négatif.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $resultat = 1;
        for ($i = 2; $i <= $n; $i++) {
            $resultat *= $i;
        }
        return $resultat;
    }
}

// Exemple d'utilisation :
$nombre = 5;
$resultatFactoriel = factorielle($nombre);

echo "Le factoriel de $nombre est : $resultatFactoriel";

?>
