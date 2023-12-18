<?php

// Données d'échantillon
$data = array(
    array(78.78001, 2),
    array(8.131001, 2),
    array(0.586001, 4),
    array(-0.125481, 3),
    -0.125481
);

// Afficher les données
foreach ($data as $item) {
    if (is_array($item)) {
        echo "(" . implode(', ', $item) . ")\n";
    } else {
        echo "$item\n";
    }
}

?>
