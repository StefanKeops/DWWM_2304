<?php
function test($n)
{
    return $n % 13 == 0 || $n % 13 == 1;
}

var_dump(test(13));
echo "<br>";
var_dump(test(14));
echo "<br>";
var_dump(test(27));
echo "<br>";
var_dump(test(41));
