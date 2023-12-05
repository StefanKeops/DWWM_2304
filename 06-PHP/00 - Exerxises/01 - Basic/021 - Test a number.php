<?php
function trinary_Test($n)
{
    $r = $n > 30
        ? "greater than 30"
        : ($n > 20
            ? "greater than 20"
            : ($n > 10
                ? "greater than 10"
                : "Input a number atleast greater than 10!"));
    echo $n . " : " . $r . "\n";
}
trinary_Test(32);
echo "<br>";
trinary_Test(21);
echo "<br>";
trinary_Test(12);
echo "<br>";
trinary_Test(4);
