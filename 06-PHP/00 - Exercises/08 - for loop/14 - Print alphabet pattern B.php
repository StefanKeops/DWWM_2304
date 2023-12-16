<?php

function afficherMotifB($hauteur) {
    for ($i = 1; $i <= $hauteur; $i++) {
        for ($j = 1; $j <= $hauteur * 2 - 1; $j++) {
            // Conditions pour afficher le motif 'A'
            if (($i == 1 || $i == $hauteur || $i == ceil($hauteur / 2)) && $j >= ceil($hauteur / 2) && $j <= $hauteur + ceil($hauteur / 2) - 1) {
                echo "*";
            } elseif (($j == 1 || $j == $hauteur * 2 - 1) && !($i == 1 || $i == $hauteur || $i == ceil($hauteur / 2))) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
}

// Afficher le motif 'A' avec une hauteur de 7
echo "Motif 'B' avec une hauteur de 7<br>";
afficherMotifB(7);

?>
