<?php
function test($nums)
{

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 5 || $nums[$i] == 7) return true;
    }

    return false;
}

var_dump(test([1, 5, 6, 9, 10, 17]));
echo "<br>";
var_dump(test([1, 4, 7, 9, 10, 17]));
echo "<br>";
var_dump(test([1, 1, 2, 9, 10, 17]));
