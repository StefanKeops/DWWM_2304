<?php
$field = array();
for ($i = 0; $i < 12; $i++) {
    // Generați un șir aleatoriu de 10 caractere ('0' sau '1')
    $randomString = generateRandomString(10);
    $field[] = str_split($randomString);
}

// Restul codului rămâne neschimbat

$c = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($field[$i][$j] === '1') {
            dfs($field, array($i, $j));
            $c++;
        }
    }
}

echo "Nombre d'îles: \n";
echo $c . PHP_EOL;

function generateRandomString($length)
{
    $characters = '01';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function dfs(&$field, $s)
{
    $stack = array($s);
    $dx = array(1, -1, 0, 0);
    $dy = array(0, 0, 1, -1);
    while (count($stack)) {
        $node = array_pop($stack);
        $field[$node[0]][$node[1]] = '0';
        for ($i = 0; $i < 4; $i++) {
            $nx = $node[1] + $dx[$i];
            $ny = $node[0] + $dy[$i];
            if (!isset($field[$ny][$nx]) || $field[$ny][$nx] === '0') {
                continue;
            }
            $stack[] = array($ny, $nx);
        }
    }
}
