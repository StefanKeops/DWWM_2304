<?php
$sum = 0;
$s = rtrim(fgets(STDIN));
if (preg_match_all('/[0-9]+/', $s, $a)) {
    foreach ($a[0] as $v) {
        $sum += (int) $v;
    }
}
echo "Somme des valeurs numériques : " . $sum . PHP_EOL;
