<?php
function test($s1)
{

    return strlen($s1) < 2 ? "" : substr($s1, 1, strlen($s1) - 2);
}

echo test("Hello") . "\n";
echo "<br>";
echo test("JS") . "\n";
echo "<br>";
echo test("  ") . "\n";
