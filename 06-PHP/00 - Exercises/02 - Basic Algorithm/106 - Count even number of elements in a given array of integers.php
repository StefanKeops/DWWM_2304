<?php
function test($nums)
{

    $evens = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] % 2 == 0) $evens++;
    }
    return $evens;
}

echo "Number of even elements: " . test([1, 5, 7, 9, 10, 12]);
