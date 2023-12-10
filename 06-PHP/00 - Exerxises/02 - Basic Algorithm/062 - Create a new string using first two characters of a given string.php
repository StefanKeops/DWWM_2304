<?php
function test($s1)
{
    if (strlen($s1) < 2) {
        return $s1;
    } else {
        return substr($s1, 0, 2);
    }
}
echo test("Hello") . "\n";
echo "<br>";
echo test("Hi") . "\n";
echo "<br>";
echo test("H") . "\n";
echo "<br>";
echo test("  ") . "\n";
