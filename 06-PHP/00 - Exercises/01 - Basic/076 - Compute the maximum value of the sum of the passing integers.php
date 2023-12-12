<?php
// Limităm la 50 de rezultate
$limitaRezultate = 50;
$contorRezultate = 0;

do {
    // Generăm o valoare aleatoare pentru n (simulăm intrarea standard)
    $nAleatoriu = rand(2, 5); // Modificați limitele după necesități

    if ($nAleatoriu === 0) {
        break; // Ieșim din buclă dacă nAleatoriu este 0
    }

    $n = (int)$nAleatoriu;
    $arr = array_fill(0, $n + 1, array_fill(0, $n + 1, 0));

    for ($i = 0; $i < $n; $i++) {
        // Generăm o linie aleatoare pentru matrice (simulăm intrarea standard)
        $lineAleatorie = implode(' ', array_map(function () {
            return rand(1, 9); // Modificați limitele după necesități
        }, range(1, $n)));

        foreach (explode(' ', $lineAleatorie) as $j => $m) {
            $m = (int)$m;
            $arr[$i][$j] = $m;
            $arr[$i][$n] += $m;
            $arr[$n][$j] += $m;
        }
    }

    $arr[$n][$n] = array_sum($arr[$n]);

    echo "<br>";
    echo "Tableau avec la somme des lignes et des colonnes :\n";
    echo "<br>";

    for ($i = 0; $i <= $n; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            printf('%5d', $arr[$i][$j]);
        }
        echo PHP_EOL;
    }

    $contorRezultate++;
} while ($contorRezultate < $limitaRezultate);
