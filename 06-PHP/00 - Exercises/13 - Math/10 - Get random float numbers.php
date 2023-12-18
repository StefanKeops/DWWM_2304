<?php

function getRandomFloat($min, $max, $precision = 2)
{
    if ($min >= $max || $precision < 0) {
        return false;
    }

    $scale = pow(10, $precision);

    return mt_rand($min * $scale, $max * $scale) / $scale;
}

// Exemple d'utilisation
$randomFloat = getRandomFloat(1.5, 10.5);
echo "Nombre flottant aléatoire : $randomFloat\n";

?>
