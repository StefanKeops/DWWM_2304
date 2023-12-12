<?php
function test($x, $y, $z)
{
    if ($x == 13) return 0;
    if ($y == 13) return $x;
    if ($z == 13) return $x + $y;
    return $x + $y + $z;
}

echo (test(4, 5, 7)) . "\n";
echo "<br>";
echo (test(7, 4, 12)) . "\n";
echo "<br>";
echo (test(10, 13, 12)) . "\n";
echo "<br>";
echo (test(13, 12, 18)) . "\n";
