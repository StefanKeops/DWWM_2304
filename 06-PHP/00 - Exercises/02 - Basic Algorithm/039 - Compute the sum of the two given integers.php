<?php
function test($a, $b)
{
    return $a + $b >= 10 && $a + $b <= 20 ? 30 : $a + $b;
}

echo test(12, 17) . "\n";
echo "<br>";
echo test(2, 17) . "\n";
echo "<br>";
echo test(22, 17) . "\n";
echo "<br>";
echo test(20, 0) . "\n";
