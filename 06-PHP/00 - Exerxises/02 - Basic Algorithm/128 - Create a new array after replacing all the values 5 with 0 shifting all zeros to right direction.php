<?php
function test($numbers)
{
    $size = sizeof($numbers);
    $index = 0;
    $arra1 = array_fill(0, $size, 0);
    for ($i = 0; $i < $size; $i++) {
        if ($numbers[$i] != 5) {
            $arra1[$index] = $numbers[$i];
            $index++;
        }
    }
    return $arra1;
}

$result = test([1, 2, 5, 3, 5, 7, 5, 9, 11]);
echo "New array: " . implode(',', $result);
