<?php

// Utilisation de la fonction array_filter pour filtrer les nombres divisibles par 4
$nombresDivisiblesPar4 = array_filter(range(200, 250), function($nombre) {
    return $nombre % 4 === 0;
});

// Utilisation de la fonction array_walk pour afficher les nombres
array_walk($nombresDivisiblesPar4, function($nombre) {
    echo $nombre . "<br>";
});

?>
