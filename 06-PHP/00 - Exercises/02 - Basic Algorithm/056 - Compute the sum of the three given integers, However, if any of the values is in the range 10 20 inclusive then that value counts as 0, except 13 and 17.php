<?php
function test($x, $y, $z)
{
    return fix_num($x) + fix_num($y) + fix_num($z);
}


function fix_num($n)
{
    return (($n < 13 && $n > 9) || ($n > 17 && $n < 21)) ? 0 : $n;
}

echo (test(4, 5, 7)) . "\n";
echo "<br>";
echo (test(7, 4, 12)) . "\n";
echo "<br>";
echo (test(10, 13, 12)) . "\n";
echo "<br>";
echo (test(17, 12, 18)) . "\n";
