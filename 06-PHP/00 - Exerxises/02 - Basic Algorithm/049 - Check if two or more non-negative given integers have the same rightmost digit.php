<?php
function test($x, $y, $z)
{
    return $x % 10 == $y % 10 || $x % 10 == $z % 10 || $y % 10 == $z % 10;
}

var_dump(test(11, 21, 31)) . "\n";
echo "<br>";
var_dump(test(11, 22, 31)) . "\n";
echo "<br>";
var_dump(test(11, 22, 33)) . "\n";
