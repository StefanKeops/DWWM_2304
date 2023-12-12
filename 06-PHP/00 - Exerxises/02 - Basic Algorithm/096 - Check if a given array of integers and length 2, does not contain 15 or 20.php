<?php
function test($nums)
{
    return $nums[0] != 15 && $nums[0] != 20 && $nums[1] != 15 && $nums[1] != 20;
}

var_dump(test([12, 20]));
echo "<br>";
var_dump(test([14, 15]));
echo "<br>";
var_dump(test([11, 21]));
