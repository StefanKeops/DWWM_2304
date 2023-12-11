<?php
function test($a1)
{
    return $a1[0] + $a1[1] + $a1[2] + $a1[3] + $a1[4];
}

echo test([10, 20, 30, 40, 50]) . "\n";
echo "<br>";
echo test([10, 20, -30, -40, 50]) . "\n";
