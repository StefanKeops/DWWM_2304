<?php
function test($arr_str, $n)
{
    $new_array = [sizeof($arr_str)];

    for ($i = 0; $i < $n; $i++) {
        $new_array[$i] = $arr_str[$i];
    }

    return $new_array;
}


$result = test(["a", "b", "bb", "c", "ccc"], 3);
echo implode(" ", $result);
