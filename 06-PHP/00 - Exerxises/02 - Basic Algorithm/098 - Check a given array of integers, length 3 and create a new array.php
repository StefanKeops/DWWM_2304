<?php
function test($numbers)
{
    for ($i = 0; $i < sizeof($numbers) - 1; $i++) {
        if ($numbers[$i] == 5 && $numbers[$i + 1] == 7)
            $numbers[$i + 1] = 1;
    }
    return $numbers;
}

$a = [1, 5, 7];
echo "Original array: " . implode(',', $a) . "\n";
echo "<br>";
$result = test($a);
echo "New array with maximum values: " . implode(',', $result);
