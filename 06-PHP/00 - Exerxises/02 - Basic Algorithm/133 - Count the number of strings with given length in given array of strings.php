<?php
function test($arr_str, $len)
{
    $ctr = 0;

    for ($i = 0; $i < sizeof($arr_str); $i++) {
        if (strlen($arr_str[$i]) ==  $len)  $ctr++;
    }
    return  $ctr;
}


echo test(["a", "b", "bb", "c", "ccc"], 1) . "\n";
