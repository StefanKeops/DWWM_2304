<?php
function test($numbers)
{
    for ($i = 0; $i <= sizeof($numbers) - 3; $i++) {
        if (
            $numbers[$i] == $numbers[$i + 1] - 1
            && $numbers[$i] == $numbers[$i + 2] - 2
        ) {
            return true;
        }
    }
    return false;
}

var_dump(test([1, 2, 3, 5, 3, 7]));
echo "<br>";
var_dump(test([3, 7, 5, 5, 3, 7]));
echo "<br>";
var_dump(test([3, 7, 5, 5, 6, 7, 5]));
