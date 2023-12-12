<?php
function test($numbers)
{
    return [$numbers[sizeof($numbers) / 2 - 1], $numbers[sizeof($numbers) / 2]];
}

$result = test([1, 5, 7, 9, 11, 13]);
echo "New array: " . implode(',', $result);
