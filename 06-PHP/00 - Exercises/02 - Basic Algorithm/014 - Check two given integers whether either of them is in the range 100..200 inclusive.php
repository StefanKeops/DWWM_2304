<?php
function test($x, $y)
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test(100, 199));
echo "<br>";
var_dump(test(250, 300));
echo "<br>";
var_dump(test(105, 190));
