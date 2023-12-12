<?php
function test($x, $y)
{
    return ($x >= 10 && $x <= 20) || ($y >= 10 && $y <= 20) ? 18 : $x + $y;
}

echo test(3, 7) . "\n";
echo "<br>";
echo test(10, 11) . "\n";
echo "<br>";
echo test(10, 20) . "\n";
echo "<br>";
echo test(21, 220) . "\n";
