<?php

function strandSort($array)
{
    $result = [];

    while (!empty($array)) {
        $subsequence = [$array[0]];
        $array = array_slice($array, 1);

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] > end($subsequence)) {
                $subsequence[] = $array[$i];
                $array = array_diff($array, [$array[$i]]);
            }
        }

        $result = mergeSortedArrays($result, $subsequence);
    }

    return $result;
}

function mergeSortedArrays($array1, $array2)
{
    $result = [];
    $i = $j = 0;

    while ($i < count($array1) && $j < count($array2)) {
        if ($array1[$i] < $array2[$j]) {
            $result[] = $array1[$i];
            $i++;
        } else {
            $result[] = $array2[$j];
            $j++;
        }
    }

    while ($i < count($array1)) {
        $result[] = $array1[$i];
        $i++;
    }

    while ($j < count($array2)) {
        $result[] = $array2[$j];
        $j++;
    }

    return $result;
}

// Example usage:
$unsortedArray = [5, 2, 8, 9, 1];
echo "Unsorted Array: " . implode(", ", $unsortedArray) . "\n"; echo "<br>";

$sortedArray = strandSort($unsortedArray);
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";
