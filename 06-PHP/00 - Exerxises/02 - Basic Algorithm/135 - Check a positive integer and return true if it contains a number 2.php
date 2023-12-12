<?php
function test($n)
{
    while ($n > 0) {
        if ($n % 10 == 2) return true;
        $n /= 10;
    }
    return false;
}

var_dump(test(123));
echo "<br>";
var_dump(test(13));
echo "<br>";
var_dump(test(222));
