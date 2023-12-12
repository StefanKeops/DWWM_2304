<?php
function test($numbers)
{

    for ($i = 0; $i < sizeof($numbers) - 1; $i++)
        if (($numbers[$i] == 3 && $numbers[$i + 1] == 3) || ($numbers[$i] == 5 && $numbers[$i] == 5))
            return true;
    return false;
}

var_dump(test([5, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([1, 2, 3, 4]));
echo "<br>";
var_dump(test([3, 3, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([1, 5, 5, 7, 8, 10]));
