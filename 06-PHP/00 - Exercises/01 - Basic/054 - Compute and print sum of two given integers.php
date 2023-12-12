<?php
// Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST  (web server)
if (defined('STDIN')) {
    fscanf(STDIN, '%d', $N);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = $_POST["N"];
} else {
    // Gestionați alte cazuri sau părăsiți scriptul
    exit("Source d'entrée invalide");
}

for ($i = 0; $i < $N; $i++) {
    // Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST (web server)
    if (defined('STDIN')) {
        fscanf(STDIN, '%s', $a);
        fscanf(STDIN, '%s', $b);
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
    } else {
        // Gestionați alte cazuri sau părăsiți scriptul
        exit("Source d'entrée invalide");
    }

    if (max(strlen($a), strlen($b)) > 80) {
        echo "overflow\n";
        continue;
    }

    $arr = array_fill(0, 81, 0);
    $a = sprintf('%081s', $a);
    $b = sprintf('%081s', $b);

    for ($j = 80; $j > 0; $j--) {
        $n = $arr[$j] + $a[$j] + $b[$j];
        if ($n >= 10) {
            $arr[$j] = substr($n, 1);
            $arr[$j - 1] += 1;
        } else {
            $arr[$j] = $n;
        }
    }

    $result = preg_replace('/^0+(\d+)$/', '$1', implode('', $arr));

    if (strlen($result) > 80) {
        echo "overflow\n";
    } else {
        echo $result, PHP_EOL;
    }
}
