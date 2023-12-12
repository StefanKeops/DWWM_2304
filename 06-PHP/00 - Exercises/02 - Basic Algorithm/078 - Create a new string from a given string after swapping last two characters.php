<?php
function test($s1)
{
    if (strlen($s1) > 1) {
        return substr($s1, 0, strlen($s1) - 2) . substr($s1, strlen($s1) - 1, 1) . substr($s1, strlen($s1) - 2, 1);
    } else {
        return $s1;
    }
}

echo test("Hello") . "\n";
echo "<br>";
echo test("Python") . "\n";
echo "<br>";
echo test("PHP") . "\n";
echo "<br>";
echo test("JS") . "\n";
echo "<br>";
echo test("C") . "\n";
