<?php
function test($s1, $n)
{

    return substr($s1, 0, $n) . substr($s1, strlen($s1) - $n, $n);
}

echo test("Hello", 1) . "\n";
echo "<br>";
echo test("Python", 2) . "\n";
echo "<br>";
echo test("on", 1) . "\n";
echo "<br>";
echo test("o", 1) . "\n";
