<?php
function test($s1, $index)
{

    return $index + 2 <= strlen($s1) ? substr($s1, $index, 2) : substr($s1, 0, 2);
}

echo test("Hello", 1) . "\n";
echo "<br>";
echo test("Python", 2) . "\n";
echo "<br>";
echo test("on", 1) . "\n";
