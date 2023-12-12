<?php

$a = array_fill(0, 1000000, true);
$a[0] = $a[1] = false;

for ($i = 2; $i * $i < 1000000; $i++) {
    if (!$a[$i]) continue;
    for ($j = $i * $i; $j < 1000000; $j += $i) {
        $a[$j] = false;
    }
}

$sum = array_fill(0, 1000000, 0);

for ($i = 1; $i < 1000000; $i++) {
    $sum[$i] += $sum[$i - 1];
    if ($a[$i]) $sum[$i]++;
}

// Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST (web server)
if (defined('STDIN')) {
    while (fscanf(STDIN, "%d", $n)) {
        echo "Nombre de nombres premiers inférieurs ou égaux à n: ";
        echo $sum[$n] . "\n";
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    echo "Nombre de nombres premiers inférieurs ou égaux à n: ";
    echo $sum[$n] . "\n";
} else {
    // Gestionați alte cazuri sau părăsiți scriptul
    exit("Source d'entrée invalide");
}
