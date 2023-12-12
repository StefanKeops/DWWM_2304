<?php
function test($n)
{
    return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test(3));
echo "<br>";
var_dump(test(14));
echo "<br>";
var_dump(test(12));
echo "<br>";
var_dump(test(37));
