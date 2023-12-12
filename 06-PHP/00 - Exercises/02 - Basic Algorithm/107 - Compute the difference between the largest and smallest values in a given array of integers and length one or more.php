<?php
function test($nums)
{

    $small_num = 0;
    $biggest_num = 0;

    if (sizeof($nums) > 0)
        $small_num = $biggest_num = $nums[0];

    for ($i = 1; $i < sizeof($nums); $i++) {
        $small_num = min($small_num, $nums[$i]);
        $biggest_num = max($biggest_num, $nums[$i]);
    }

    return $biggest_num - $small_num;
}

echo "Difference between the largest and smallest values: " . test([1, 5, 7, 9, 10, 12]);
