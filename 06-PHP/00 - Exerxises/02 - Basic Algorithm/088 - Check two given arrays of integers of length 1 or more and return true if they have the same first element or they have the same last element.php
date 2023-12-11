<?php
function test($a1, $a2)
{
    return $a1[0] == $a2[0] || $a1[sizeof($a1) - 1] == $a2[sizeof($a2) - 1];
}

var_dump(test([10, 20, 40, 50], [10, 20, 40, 50]));
echo "<br>";
var_dump(test([10, 20, 40, 10], [10, 20, 40, 5]));
echo "<br>";
var_dump(test([12, 24, 35, 55], [1, 20, 40, 5]));
