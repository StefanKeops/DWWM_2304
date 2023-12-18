<?php

function isSorted($array)
{
    $length = count($array);
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $array[$i - 1]) {
            return false;
        }
    }
    return true;
}

function bogoSort($array)
{
    while (!isSorted($array)) {
        shuffle($array);
    }
    return $array;
}

// Example usage:
$unsortedArray = [5, 2, 8, 9, 1];
echo "Unsorted Array: " . implode(", ", $unsortedArray) . "\n"; echo "<br>";

$sortedArray = bogoSort($unsortedArray);
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";
