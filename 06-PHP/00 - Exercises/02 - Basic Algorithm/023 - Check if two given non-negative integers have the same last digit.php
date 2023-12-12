<?php
function test($x, $y)
{
    return abs($x % 10) == abs($y % 10);
}

var_dump(test(123, 456));
echo "<br>";
var_dump(test(12, 512));
echo "<br>";
var_dump(test(7, 87));
echo "<br>";
var_dump(test(12, 45));
