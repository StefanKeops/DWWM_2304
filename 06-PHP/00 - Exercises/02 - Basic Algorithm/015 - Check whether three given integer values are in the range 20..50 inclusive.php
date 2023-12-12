<?php
function test($x, $y, $z)
{
    return ($x >= 20 && $x <= 50) || ($y >= 20 && $y <= 50) || ($z >= 20 && $z <= 50);
}

var_dump(test(11, 20, 12));
echo "<br>";
var_dump(test(30, 30, 17));
echo "<br>";
var_dump(test(25, 35, 50));
echo "<br>";
var_dump(test(15, 12, 8));
