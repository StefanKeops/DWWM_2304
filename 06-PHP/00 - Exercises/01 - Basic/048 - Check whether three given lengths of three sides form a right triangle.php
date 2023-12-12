<?php
$a = 5;
$b = 3;
$c = 4;
$a *= $a;
$b *= $b;
$c *= $c;
if ($a + $b == $c || $a + $c == $b || $b + $c == $a) {
    echo "Oui\n";
} else {
    echo "Non\n";
}
