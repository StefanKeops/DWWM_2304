<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;

    // Ajoute un trait d'union sauf pour le dernier nombre
    if ($i < 10) {
        echo '-';
    }
}

?>
