<?php
function test($x, $y, $z)
{
    $max = max($x, max($y, $z));
    return $max;
}

echo test(1, 2, 3) . "\n";
echo "<br>";
echo test(1, 3, 2) . "\n";
echo "<br>";
echo test(1, 1, 1) . "\n";
echo "<br>";
echo test(1, 2, 2) . "\n";
