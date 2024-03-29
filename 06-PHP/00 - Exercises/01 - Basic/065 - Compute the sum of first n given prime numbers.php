<?php
$max = 105000;
$arr = new \SplFixedArray($max + 1);
for ($i = 2; $i <= $max; $i++) {
    $arr[$i] = 1;
}

for ($i = 2, $len = sqrt($max); $i <= $len; $i++) {
    if (!$arr[$i]) {
        continue;
    }
    for ($j = $i, $len2 = $max / $i; $j <= $len2; $j++) {
        $arr[$i * $j] = 0;
    }
}

$randomNumber = rand(1, 100);
$line = (string) $randomNumber;
$limit = 50; // Numărul maxim de iterații

while ($line !== '0' && $limit > 0) {
    $n = (int)$line;
    $result = 0;
    $cnt = 0;

    for ($i = 2; $i <= $max; $i++) {
        if ($cnt === $n) {
            break;
        } elseif ($arr[$i]) {
            $result += $i;
            $cnt++;
        }
    }

    echo "Somme des premiers " . $n . " nombres premiers :";
    echo $result, PHP_EOL;
    echo "<br>";

    $randomNumber = rand(1, 100);
    $line = (string) $randomNumber;
    $limit--;
}
