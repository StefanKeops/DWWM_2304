<?php
function test($x, $y, $z)
{
    if ($x == $y && $y == $z) return 0;
    if ($x == $y) return $z;
    if ($x == $z) return $y;
    if ($y == $z) return $x;
    return $x + $y + $z;
}
echo (test(4, 5, 7)) . "\n";
echo "<br>";
echo (test(7, 4, 12)) . "\n";
echo "<br>";
echo (test(10, 10, 12)) . "\n";
echo "<br>";
echo (test(12, 12, 18)) . "\n";
