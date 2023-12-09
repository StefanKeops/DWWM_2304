<?php
function test($x)
{
    if (abs($x - 100) <= 10 || abs($x - 200) <= 10)
        return true;
    return false;
}

var_dump(test(103));
echo "<br>";
var_dump(test(90));
echo "<br>";
var_dump(test(89));
