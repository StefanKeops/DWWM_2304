<?php

function genererTriangleFloyd($n) {
    $nombre = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $nombre . " ";
            $nombre++;
        }
        echo "<br>";
    }
}

// Afficher le triangle de Floyd avec n = 5
echo "n = 5<br>";
genererTriangleFloyd(5);

// Afficher le triangle de Floyd avec n = 11
echo "<br>n = 11<br>";
genererTriangleFloyd(11);

?>
