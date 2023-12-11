<?php
function test($a1)
{
    return [$a1[1], $a1[2], $a1[3], $a1[0]];
}

$a = [10, 20, -30, -40];

echo "Original array: " . implode(',', $a) . "\n";

$result = test($a);

echo "Rotated array: " . implode(',', $result);
