<?php
function test($nums)
{
    return [$nums[4], $nums[3], $nums[2], $nums[1], $nums[0]];
}

$a = [10, 20, -30, -40, 50];

echo "Original array: " . implode(',', $a) . "\n";

$result = test($a);

echo "Reverse array: " . implode(',', $result);
