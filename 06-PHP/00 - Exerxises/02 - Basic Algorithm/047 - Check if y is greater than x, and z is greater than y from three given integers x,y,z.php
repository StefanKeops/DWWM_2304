<?php
function test($x, $y, $z)
{
    return $x < $y && $y < $z;
}

var_dump(test(1, 2, 3)) . "\n";
echo "<br>";
var_dump(test(4, 5, 6)) . "\n";
echo "<br>";
var_dump(test(-1, 1, 0)) . "\n";
