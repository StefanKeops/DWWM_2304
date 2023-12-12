<?php
function test($s1)
{

    if (strlen($s1) >= 2) {
        $s1 = substr($s1, 0, 2);
    } else if (strlen($s1) > 0) {
        $s1 = substr($s1, 0, 1) . "#";
    } else {
        $s1 = "##";
    }
    return $s1;
}

echo test("Hello") . "\n";
echo "<br>";
echo test("Python") . "\n";
echo "<br>";
echo test("a") . "\n";
echo "<br>";
echo test(" ") . "\n";
