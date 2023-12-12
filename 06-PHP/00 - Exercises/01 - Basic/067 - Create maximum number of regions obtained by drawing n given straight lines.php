<?php
$counter = 0;

while ($counter < 50) {
    // Generează un număr aleatoriu
    $randomNumber = rand(1, 100);
    $n = (int)$randomNumber;

    $result = 2;

    for ($i = 2; $i <= $n; $i++) {
        $result += $i;
    }

    echo 'Nombre maximum de régions : ';
    echo $result, PHP_EOL;
    echo "<br>";

    $counter++;
}
