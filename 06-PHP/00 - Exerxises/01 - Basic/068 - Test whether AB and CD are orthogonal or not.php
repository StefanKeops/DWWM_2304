<?php
define('EPS', 1e-8);
// Generează o valoare aleatoare pentru a înlocui trim(fgets(STDIN))
$a = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));

$line = array();
$line[] = $a[1] - $a[3] === 0.0 ? INF : ($a[0] - $a[2]) / ($a[1] - $a[3]);
$line[] = $a[5] - $a[7] === 0.0 ? INF : ($a[4] - $a[6]) / ($a[5] - $a[7]);

if (max($line) === INF && min($line) === 0 || abs($line[0] * $line[1] + 1.0) < EPS) {
    echo 'Orthogonal';
} else {
    echo 'Non orthogonal';
}
echo PHP_EOL;
