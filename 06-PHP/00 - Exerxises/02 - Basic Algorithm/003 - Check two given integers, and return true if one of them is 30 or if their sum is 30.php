<?php
function test($x, $y)
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test(30, 0));
echo "<br>";
var_dump(test(25, 5));
echo "<br>";
var_dump(test(20, 30));
echo "<br>";
var_dump(test(20, 25));
