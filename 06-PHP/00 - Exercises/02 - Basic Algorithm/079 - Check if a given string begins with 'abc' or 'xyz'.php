<?php
function test($s1)
{
    if (substr($s1, 0, 3) == "abc") {
        return "abc";
    } else if (substr($s1, 0, 3) == "xyz") {
        return "xyz";
    } else {
        return "";
    }
}

echo test("abc") . "\n";
echo "<br>";
echo test("abcdef") . "\n";
echo "<br>";
echo test("C") . "\n";
echo "<br>";
echo test("xyz") . "\n";
echo "<br>";
echo test("xyzsder") . "\n";
