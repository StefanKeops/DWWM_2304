<?php
function test($nums)
{

    $three = false;
    $five = false;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 3) {
            $three = true;
        }
        if ($nums[$i] == 5) {
            $five  = true;
        }
        if ($three && $five) return false;
    }
    return true;
}

var_dump(test([5, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([3, 3, 3, 3]));
echo "<br>";
var_dump(test([3, 3, 3, 5, 5, 5]));
echo "<br>";
var_dump(test([1, 6, 8, 10]));
