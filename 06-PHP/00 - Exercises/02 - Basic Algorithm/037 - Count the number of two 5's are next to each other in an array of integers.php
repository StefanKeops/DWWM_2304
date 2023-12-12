<?php
function test($numbers)
{
    $ctr = 0;
    for ($i = 0; $i < sizeof($numbers) - 1; $i++) {
        if (($numbers[$i] == 5) && ($numbers[$i + 1] == 5) || ($numbers[$i + 1] == 6)) $ctr++;
    }
    return $ctr;
}

echo test([5, 5, 2]) . "\n";
echo "<br>";
echo test([5, 5, 2, 5, 5]) . "\n";
echo "<br>";
echo test([5, 6, 2, 9]) . "\n";
