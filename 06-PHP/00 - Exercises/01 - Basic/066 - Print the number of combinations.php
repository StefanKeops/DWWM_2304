<?php
define('MAX', 50001);
define('COUNT', 5133);

$table = new SplFixedArray(MAX);
$table[0] = $table[1] = false;

$primes = new SplFixedArray(COUNT);
$p_i = 0;
$i = 2;

while ($i < MAX) {
    $primes[$p_i++] = $i;
    $table[$i] = true;

    for ($j = $i * 2; $j < MAX; $j += $i) {
        $table[$j] = false;
    }

    while (++$i < MAX && $table[$i] === false);
}

$counter = 0;

while ($counter < 50) {
    // Generează un număr aleatoriu
    $randomNumber = rand(1, 100);
    $n = $randomNumber;

    if ($n === 0) {
        continue; // Dacă se generează zero, treci la următoarea iterație
    }

    $c = 0;

    for ($i = 0; $i < COUNT; $i++) {
        if ($primes[$i] > $n / 2) {
            break;
        }
        if ($table[$n - $primes[$i]]) {
            $c++;
        }
    }

    echo "Nombre de combinaisons : ";
    echo $c . PHP_EOL;
    echo "<br>";

    $counter++;
}
