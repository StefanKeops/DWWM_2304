<?php
function test($nums)
{
    $max = max($nums);

    return [$max, $max, $max, $max];
}

$a = [10, 20, -30, -40];

echo "Original array: " . implode(',', $a) . "\n";

$result = test($a);

echo "New array with maximum values: " . implode(',', $result);
