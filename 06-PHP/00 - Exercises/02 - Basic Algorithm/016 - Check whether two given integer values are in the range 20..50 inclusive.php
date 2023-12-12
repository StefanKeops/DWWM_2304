<?php
function test($x, $y)
{
    return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
}

var_dump(test(20, 84));
echo "<br>";
var_dump(test(14, 50));
echo "<br>";
var_dump(test(11, 45));
echo "<br>";
var_dump(test(25, 40));
