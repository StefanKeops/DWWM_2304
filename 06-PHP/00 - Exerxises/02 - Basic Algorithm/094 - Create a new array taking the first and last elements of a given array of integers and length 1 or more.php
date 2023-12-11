<?php
function test($nums)
{
    return [$nums[0], $nums[sizeof($nums) - 1]];
}

$a = [10, 20, -30, -40, 30];

echo "Original array: " . implode(',', $a) . "\n";

$result = test($a);

echo "New array: " . implode(',', $result);
