<?php
// Generăm o valoare aleatoare pentru n (simulăm intrarea standard)
$nAleatoriu = rand(1, 10); // Modificați limitele după necesități

// Inițializăm bucla pentru fiecare valoare a lui n
for ($i = 0; $i < $nAleatoriu; $i++) {
    // Generăm o valoare aleatoare pentru s (simulăm intrarea standard)
    $sAleatoriu = rand(1000, 9999); // Modificați limitele după necesități

    // Convertim valoarea aleatoare a lui s în șir de caractere
    $s = str_split($sAleatoriu);

    // Sortăm descrescător șirul de caractere pentru a obține cel mai mare număr
    rsort($s);
    $a = (int) implode('', $s);

    // Sortăm crescător șirul de caractere pentru a obține cel mai mic număr
    sort($s);
    $b = (int) implode('', $s);

    // Afișăm diferența dintre cel mai mare și cel mai mic număr
    echo "Différence entre le plus grand entier et le plus petit entier :\n";
    echo $a - $b;
    echo PHP_EOL;
    echo "<br>";
}
