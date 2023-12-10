<?php
function test($x, $y)
{
    return $x / 10 == $y / 10 || $x / 10 == $y % 10 || $x % 10 == $y / 10 || $x % 10 == $y % 10;
}

var_dump(test(11, 21)) . "\n";
echo "<br>";
var_dump(test(11, 20)) . "\n";
echo "<br>";
var_dump(test(10, 10)) . "\n";
