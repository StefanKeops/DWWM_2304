<?php
function test($numbers)
{
    $firstHalf = Average($numbers, 0, sizeof($numbers) / 2);
    $secondHalf = Average($numbers, sizeof($numbers) / 2, sizeof($numbers));
    return $firstHalf > $secondHalf ? $firstHalf : $secondHalf;
}

function Average($num, $start, $end)
{
    $sum = 0;
    for ($i = $start; $i < $end; $i++)
        $sum += $num[$i];
    return $sum / (sizeof($num) / 2);
}

echo test([1, 2, 3, 4, 6, 8]) . "\n";
echo "<br>";
echo test([15, 2, 3, 4, 15, 11]) . "\n";
