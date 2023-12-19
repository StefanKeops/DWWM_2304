<?php

function estPuissanceDe($x, $y)
{
    if ($x <= 0 || $y <= 0) {
        return false;
    }

    $puissance = 1;
    while ($puissance < $x) {
        $puissance *= $y;
    }

    return $puissance === $x;
}

// Exemple d'utilisation :
$x1 = 16;
$y1 = 2;
echo "Pour x = $x1 et y = $y1, la réponse est " . (estPuissanceDe($x1, $y1) ? "true" : "false") . "\n";  echo "<br>";

$x2 = 12;
$y2 = 2;
echo "Pour x = $x2 et y = $y2, la réponse est " . (estPuissanceDe($x2, $y2) ? "true" : "false") . "\n";  echo "<br>";
