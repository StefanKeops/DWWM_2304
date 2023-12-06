<?php
$counter = 0;

while ($counter < 50) {
    // Generează o valoare aleatoare
    $randomValue = rand(1, 100);
    $s = (string)$randomValue;

    $sum = 0;

    // Extrage valorile numerice din șir
    if (preg_match_all('/[0-9]+/', $s, $a)) {
        foreach ($a[0] as $v) {
            $sum += (int)$v;
        }
    }

    echo "Somme des valeurs numériques : " . $sum . PHP_EOL;
    echo "<br>";

    $counter++;
}
