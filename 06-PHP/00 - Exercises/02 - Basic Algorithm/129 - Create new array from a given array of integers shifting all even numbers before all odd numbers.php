<?php
function test($numbers)
{
    $index = 0;
    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] % 2 == 0) {
            $temp = $numbers[$index];
            $numbers[$index] = $numbers[$i];
            $numbers[$i] = $temp;
            $index++;
        }
    }
    return $numbers;
}

$result = test([1, 2, 5, 3, 5, 4, 6, 9, 11]);
echo "New array: " . implode(',', $result);
