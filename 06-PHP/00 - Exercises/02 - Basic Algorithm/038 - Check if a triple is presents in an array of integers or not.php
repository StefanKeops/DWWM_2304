<?php
function test($nums)
{
    $arra_len = sizeof($nums) - 1;
    $n = 0;
    for ($i = 0; $i < $arra_len; $i++) {
        $n = $nums[$i];
        if ($n == $nums[$i + 1] && $n == $nums[$i + 2]) return true;
    }
    return false;
}

var_dump(test(array(1, 1, 2, 2, 1)));
echo "<br>";
var_dump(test(array(1, 1, 2, 1, 2, 3)));
echo "<br>";
var_dump(test(array(1, 1, 1, 2, 2, 2, 1)));
