<?php
function test($numbers)
{
    $pos = 0;
    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] == 0) {
            $numbers[$i] = $numbers[$pos];
            $numbers[$pos++] = 0;
        }
    }
    return $numbers;
}

$result = test([1, 2, 0, 3, 5, 7, 0, 9, 11]);
echo "New array: " . implode(',', $result);
