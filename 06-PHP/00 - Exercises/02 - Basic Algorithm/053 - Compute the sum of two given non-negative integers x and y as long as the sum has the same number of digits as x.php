<?php
function test($x, $y)
{
    return strlen((string)($x + $y)) > strlen((string)$x) ? $x : $x + $y;
}

echo (test(4, 5)) . "\n";
echo "<br>";
echo (test(7, 4)) . "\n";
echo "<br>";
echo (test(10, 10)) . "\n";
