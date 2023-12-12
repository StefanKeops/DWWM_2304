<?php
function test($nums)
{
    return sizeof($nums) == 2 && (($nums[0] == 10 && $nums[1] == 10) || ($nums[0] == 20 && $nums[1] == 20));
}

var_dump(test([12, 20]));
echo "<br>";
var_dump(test([20, 20]));
echo "<br>";
var_dump(test([10, 10]));
echo "<br>";
var_dump(test([10]));
