<?php
function test($x, $y)
{
    return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
}

var_dump(test(5, 4));
echo "<br>";
var_dump(test(4, 3));
echo "<br>";
var_dump(test(1, 4));
