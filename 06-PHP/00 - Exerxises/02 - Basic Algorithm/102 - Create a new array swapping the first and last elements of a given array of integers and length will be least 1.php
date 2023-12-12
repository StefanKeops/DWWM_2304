<?php
function test($numbers)
{

    $first = $numbers[0];
    $numbers[0] = $numbers[sizeof($numbers) - 1];
    $numbers[sizeof($numbers) - 1] = $first;
    return $numbers;
}

$result = test([1, 5, 7, 9, 11, 13]);
echo "New array, after swapping first and last elements: " . implode(',', $result);
