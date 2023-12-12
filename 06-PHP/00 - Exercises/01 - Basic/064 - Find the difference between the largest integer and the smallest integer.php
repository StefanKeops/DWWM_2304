<?php
// Generează un număr aleatoriu pentru a înlocui fscanf(STDIN, '%d', $n)
$n = rand(1, 10);

for ($i = 0; $i < $n; $i++) {
    // Generează un șir de caractere aleatorii pentru a înlocui fscanf(STDIN, '%s', $s)
    $s = generateRandomString();

    // Converteste șirul într-un array și îl sortează descrescător
    $s = str_split($s);
    rsort($s);

    // Construiește un număr întreg din array-ul sortat descrescător
    $a = (int) implode('', $s);

    // Sortează array-ul în ordine crescătoare
    sort($s);

    // Construiește un număr întreg din array-ul sortat crescător
    $b = (int) implode('', $s);

    echo "Différence entre le plus grand entier et le plus petit entier :\n";
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo PHP_EOL;
}

function generateRandomString($length = 5)
{
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}
