<?php
function test($numbers)
{
    for ($i = 0; $i < sizeof($numbers) - 1; $i++) {
        if ($numbers[$i + 1] == $numbers[$i] && $numbers[$i] == 15) return true;
    }
    return false;;
}

var_dump(test([5, 5, 1, 15, 15]));
echo "<br>";
var_dump(test([15, 2, 3, 4, 15]));
echo "<br>";
var_dump(test([3, 3, 15, 15, 5, 5]));
echo "<br>";
var_dump(test([1, 5, 15, 7, 8, 15]));
