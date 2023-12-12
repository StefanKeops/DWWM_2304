<?php
function test($nums, $count)
{
    $evens = [$count];
    $j = 0;

    for ($i = 0; $j < $count; $i++) {
        if ($nums[$i] % 2 != 0) {
            $evens[$j] = $nums[$i];
            $j++;
        }
    }

    return $evens;
}

$result = test([1, 2, 3, 5, 7, 9, 10], 3);
echo "New array: " . implode(",", $result);
