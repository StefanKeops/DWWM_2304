<?php
function test($nums)
{

    for ($i = 0; $i < sizeof($nums) - 1; $i++) {
        if ($nums[$i] == 5 && $nums[$i] == $nums[$i + 1]) return true;
    }

    return false;
}

var_dump(test([1, 5, 6, 9, 10, 17]));
echo "<br>";
var_dump(test([1, 5, 5, 9, 10, 17]));
echo "<br>";
var_dump(test([1, 5, 5, 9, 10, 17, 5, 5]));
