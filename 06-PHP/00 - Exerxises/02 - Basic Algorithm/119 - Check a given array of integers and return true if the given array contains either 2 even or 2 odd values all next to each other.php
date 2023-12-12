<?php
function test($numbers)
{
    $tot_odd = 0;
    $tot_even = 0;

    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($tot_odd < 2 && $tot_even < 2) {
            if ($numbers[$i] % 2 == 0) {
                $tot_even++;
                $tot_odd = 0;
            } else {
                $tot_odd++;
                $tot_even = 0;
            }
        }
    }
    return $tot_odd == 2 || $tot_even == 2;
}

var_dump(test([3, 5, 1, 3, 7]));
echo "<br>";
var_dump(test([1, 2, 3, 4]));
echo "<br>";
var_dump(test([3, 3, 5, 5, 5, 5]));
echo "<br>";
var_dump(test([2, 4, 5, 6]));
