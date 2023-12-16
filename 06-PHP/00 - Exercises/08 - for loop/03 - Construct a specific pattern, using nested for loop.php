<?php

// Définir le nombre de lignes du motif
$nombreLignes = 5;

// Boucle externe pour les lignes
for ($i = 1; $i <= $nombreLignes; $i++) {
    // Boucle interne pour les étoiles de chaque ligne
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }

    // Passer à la ligne suivante après chaque ligne
    echo "\n";
    echo "<br>";
}

?>
