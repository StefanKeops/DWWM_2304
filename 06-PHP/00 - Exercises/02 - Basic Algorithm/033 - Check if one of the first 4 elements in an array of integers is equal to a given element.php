<?php
function test($nums, $n)
{
    return sizeof($nums) < 4 ? in_array($n, $nums) : in_array($n, array_slice($nums, 0, 4));
}

var_dump(test(array(1, 2, 9, 3), 3));
echo "<br>";
var_dump(test(array(1, 2, 3, 4, 5, 6), 2));
echo "<br>";
var_dump(test(array(1, 2, 2, 3), 9));
