<?php
function test($numbers)
{
    $len = sizeof($numbers);
    for ($i = 0; $i < $len - 1; $i++) {
        if ($numbers[$i] == 5 && $numbers[$i + 1] == 5) return true;
        if ($i + 2 < $len && $numbers[$i] == 5 && $numbers[$i + 2] == 5) return true;
    }

    return false;
}

var_dump(test([5, 5, 1, 5, 5]));
echo "<br>";
var_dump(test([1, 2, 3, 4]));
echo "<br>";
var_dump(test([3, 3, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([1, 5, 5, 7, 8, 10]));
