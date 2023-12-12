<?php
function test($s)
{
    $ctr = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        if (substr($s, $i, 1) == 'z') {
            $ctr++;
        }
    }

    return $ctr > 1 && $ctr < 4;
}

var_dump(test("frizz"));
echo "<br>";
var_dump(test("zane"));
echo "<br>";
var_dump(test("Zazz"));
echo "<br>";
var_dump(test("false"));
