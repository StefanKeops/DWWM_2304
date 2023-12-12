<?php
function test($numbers)
{
    $arr_len = sizeof($numbers);
    $flag = true;

    for ($i = 0; $i < $arr_len; $i++) {
        if ($numbers[$i] == 5) {
            if (($i > 0 && $numbers[$i - 1] == 5) || ($i < $arr_len - 1 && $numbers[$i + 1] == 5)) $flag = true;
            else if ($i == $arr_len - 1) $flag = false;
            else return false;
        }
    }
    return $flag;
}

var_dump(test([3, 5, 5, 3, 7]));
echo "<br>";
var_dump(test([3, 5, 5, 4, 1, 5, 7]));
echo "<br>";
var_dump(test([3, 5, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([2, 4, 5, 5, 6, 7, 5]));
