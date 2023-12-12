<?php
function test($nums)
{
    return $nums[0] == 10 || $nums[sizeof($nums) - 1] == 10;
}

var_dump(test([10, 20, 40, 50]));
echo "<br>";
var_dump(test([5, 20, 40, 10]));
echo "<br>";
var_dump(test([10, 20, 40, 10]));
echo "<br>";
var_dump(test([12, 24, 35, 55]));
