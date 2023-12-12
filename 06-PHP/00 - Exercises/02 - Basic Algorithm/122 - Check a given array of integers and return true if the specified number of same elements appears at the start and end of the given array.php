<?php
function test($numbers, $len)
{
    $arra_size = sizeof($numbers);

    for ($i = 0; $i < $len; $i++) {
        if ($numbers[$i] != $numbers[$arra_size - $len + $i]) {
            return false;
        }
    }

    return true;
}

var_dump(test([3, 7, 5, 5, 3, 7], 2));
echo "<br>";
var_dump(test([3, 7, 5, 5, 3, 7], 3));
echo "<br>";
var_dump(test([3, 7, 5, 5, 3, 7, 5], 3));
