<?php

function mergeSort($array)
{
    $length = count($array);

    if ($length <= 1) {
        return $array;
    }

    // Split the array into two halves
    $mid = (int)($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    // Recursively sort each half
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Merge the sorted halves
    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $i = $j = 0;

    // Compare elements and merge the two halves
    while ($i < $leftLength && $j < $rightLength) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Copy the remaining elements from both halves (if any)
    while ($i < $leftLength) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < $rightLength) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Example usage:
$unsortedArray = [5, 2, 8, 9, 1];
echo "Unsorted Array: " . implode(", ", $unsortedArray) . "\n"; echo "<br>";

$sortedArray = mergeSort($unsortedArray);
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";
