<?php

// Définir le nombre de lignes du motif
$nombreLignes = 5;

// Boucle externe pour les lignes ascendantes
for ($i = 1; $i <= $nombreLignes; $i++) {
    // Boucle interne pour les étoiles de chaque ligne ascendante
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }

    // Passer à la ligne suivante après chaque ligne ascendante
    echo "\n"; echo "<br>";
}

// Boucle externe pour les lignes descendantes
for ($i = $nombreLignes - 1; $i >= 1; $i--) {
    // Boucle interne pour les étoiles de chaque ligne descendante
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }

    // Passer à la ligne suivante après chaque ligne descendante
    echo "\n"; echo "<br>";
}

?>
