<?php
function test($numbers)
{
    $three = false;

    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($three && $numbers[$i] == 5) return true;
        if ($numbers[$i] == 3) $three = true;
    }
    return false;
}

var_dump(test([3, 5, 1, 3, 7]));
echo "<br>";
var_dump(test([1, 2, 3, 4]));
echo "<br>";
var_dump(test([3, 3, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([2, 5, 5, 7, 8, 10]));
