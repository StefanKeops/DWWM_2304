<?php
function test($x, $y)
{
    if ($x > 13 && $y > 13) return 0;
    if ($x <= 13 && $y > 13) return x;
    if ($y <= 13 && $x > 13) return y;
    return $x > $y ? $x : $y;
}

echo (test(4, 5)) . "\n";
echo "<br>";
echo (test(7, 12)) . "\n";
echo "<br>";
echo (test(10, 13)) . "\n";
echo "<br>";
echo (test(17, 33)) . "\n";
