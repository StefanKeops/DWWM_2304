<?php
function test($nums)
{

    $sum = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] != 17) $sum += $nums[$i];
    }
    return $sum;
}

echo "Sum of values in the array of integers except the number 17: " . test([1, 5, 7, 9, 10, 17]);
