<?php
function test($numbers)
{

    if (sizeof($numbers) >= 2) {
        $front_nums = [$numbers[0], $numbers[1]];
    } else if (sizeof($numbers) > 0) {
        $front_nums = [$numbers[0]];
    } else {
        $front_nums = [];
    }

    return $front_nums;
}

$result = test([1, 5, 7, 9, 11, 13]);
echo "New array: " . implode(',', $result);
