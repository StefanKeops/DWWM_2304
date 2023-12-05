<?php
$a = 15;
$b = 27;

// logica schimbului

echo "\nLe numéro avant l'échange est:\n";
echo "<br>";
echo "Nombre a =" . $a . " et b=" . $b;
echo "<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "\nLe numéro après échange est: \n";
echo "<br>";
echo "Nombre a =" . $a . " et b=" . $b . "\n";
echo "<br>";

$c = 15;
$d = 276;
echo "\nAvant d'échanger:  " . $c . ' , ' . $d;
echo "<br>";
list($c, $d) = array($d, $c);
echo "<br>";
echo "\nAprès avoir échangé:  " . $c . ' , ' . $d . "\n";
