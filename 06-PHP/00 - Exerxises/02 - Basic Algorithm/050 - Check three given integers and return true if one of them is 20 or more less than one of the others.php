<?php
function test($x, $y, $z)
{
    return abs($x - $y) >= 20 || abs($x - $z) >= 20 ||
        abs($y - $z) >= 20;
}

var_dump(test(11, 21, 31)) . "\n";
echo "<br>";
var_dump(test(11, 22, 31)) . "\n";
echo "<br>";
var_dump(test(10, 20, 15)) . "\n";
