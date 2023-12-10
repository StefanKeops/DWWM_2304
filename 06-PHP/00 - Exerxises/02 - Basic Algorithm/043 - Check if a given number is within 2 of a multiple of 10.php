<?php
function test($n)
{
    return $n % 10 <= 2 || $n % 10 >= 8;
}

var_dump(test(3));
echo "<br>";
var_dump(test(7));
echo "<br>";
var_dump(test(8));
echo "<br>";
var_dump(test(21));
