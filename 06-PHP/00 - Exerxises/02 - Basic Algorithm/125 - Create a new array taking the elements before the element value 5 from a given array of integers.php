<?php
function test($numbers)
{
    $size = 0;
    $pre_ele_5;
    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] == 5) {
            $size = $i;
            break;
        }
    }
    $pre_ele_5 = [$size];

    for ($j = 0; $j < $size; $j++) {
        $pre_ele_5[$j] = $numbers[$j];
    }
    return $pre_ele_5;
}

$result = test([1, 2, 3, 5, 7]);
echo "New array: " . implode(',', $result);
