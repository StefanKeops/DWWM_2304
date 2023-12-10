<?php
function test($nums)
{
    for ($i = 0; $i < sizeof($nums) - 2; $i++) {
        if ($nums[$i] == 1 && $nums[$i + 1] == 2 && $nums[$i + 2] == 3)
            return true;
    }
    return false;
}

var_dump(test(array(1, 1, 2, 3, 1)));
echo "<br>";
var_dump(test(array(1, 1, 2, 4, 1)));
echo "<br>";
var_dump(test(array(1, 1, 2, 1, 2, 3)));
