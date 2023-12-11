<?php
function test($nums)
{
    return sizeof($nums) > 0 && $nums[0] == $nums[sizeof($nums) - 1];
}

var_dump(test([10, 20, 40, 50]));
echo "<br>";
var_dump(test([10, 20, 40, 10]));
echo "<br>";
var_dump(test([12, 24, 35, 55]));
