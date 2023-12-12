<?php
function test($nums)
{

    $no_3 = 0;
    $no_5 = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 3) $no_3++;
        if ($nums[$i] == 5) $no_5++;
    }

    return $no_3 > $no_5;
}

var_dump(test([1, 5, 6, 9, 3, 3]));
echo "<br>";
var_dump(test([1, 5, 5, 5, 10, 17]));
echo "<br>";
var_dump(test([1, 3, 3, 5, 5, 5]));
