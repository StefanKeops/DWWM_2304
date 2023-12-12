<?php
// Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST  (web server)
if (defined('STDIN')) {
    fscanf(STDIN, '%d', $n);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
} else {
    // Gestionați alte cazuri sau părăsiți scriptul
    exit("Source d'entrée invalide");
}

for ($i = 0; $i < $n; $i++) {
    // Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST  (web server)
    if (defined('STDIN')) {
        fscanf(STDIN, '%f %f %f %f %f %f %f %f', $x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x1 = $_POST["x1"];
        $y1 = $_POST["y1"];
        $x2 = $_POST["x2"];
        $y2 = $_POST["y2"];
        $x3 = $_POST["x3"];
        $y3 = $_POST["y3"];
        $x4 = $_POST["x4"];
        $y4 = $_POST["y4"];
    } else {
        // Gestionați alte cazuri sau părăsiți scriptul
        exit("Source d'entrée invalide");
    }

    $pq = INF;
    if ($x2 - $x1 !== 0.0) {
        $pq = ($y2 - $y1) / ($x2 - $x1);
    }
    $rs = INF;
    if ($x4 - $x3 !== 0.0) {
        $rs = ($y4 - $y3) / ($x4 - $x3);
    }

    echo $pq === $rs ? 'PQ et RS sont parallèles.' : 'PQ et RS ne sont pas parallèles.';
    echo PHP_EOL;
}
