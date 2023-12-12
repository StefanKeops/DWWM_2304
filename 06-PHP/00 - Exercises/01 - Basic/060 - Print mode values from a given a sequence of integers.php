<?php
$hoge = array();

// Limitează numărul de iterații pentru a evita aglomerarea memoriei
for ($i = 0; $i < 1000; $i++) {
    $hoge[] = rand(1, 100);
}

// Calculează frecvența valorilor
$hage = array_count_values($hoge);
$max = max($hage);

// Găsește cheile corespunzătoare valorii maxime
$koge = array_keys($hage, $max);

echo "Valeurs du mode (par ordre croissant):\n";

// Sortează cheile în ordine crescătoare
sort($koge, SORT_ASC);

// Afișează cheile sortate
foreach ($koge as $val) {
    echo $val . PHP_EOL;
}
