<?php
function test($nums)
{

    $sum = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 5)
            $sum += 5;
    }

    return $sum == 15;
}

var_dump(test([1, 5, 6, 9, 10, 17]));
echo "<br>";
var_dump(test([1, 5, 5, 5, 10, 17]));
echo "<br>";
var_dump(test([1, 1, 5, 5, 5, 5]));
