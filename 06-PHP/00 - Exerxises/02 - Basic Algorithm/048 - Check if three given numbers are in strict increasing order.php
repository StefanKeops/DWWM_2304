<?php
function test($x, $y, $z, $flag)
{
    return $flag ? $x <= $y && $y <= $z : $x < $y && $y < $z;
}

var_dump(test(1, 2, 3, false)) . "\n";
echo "<br>";
var_dump(test(1, 2, 3, true)) . "\n";
echo "<br>";
var_dump(test(10, 2, 30, false)) . "\n";
echo "<br>";
var_dump(test(10, 10, 30, true)) . "\n";
