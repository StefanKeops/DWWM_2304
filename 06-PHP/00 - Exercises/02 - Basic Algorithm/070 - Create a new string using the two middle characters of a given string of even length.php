<?php
function test($s1)
{

    return substr($s1, strlen($s1) / 2 - 1, 2);
}

echo test("Hell") . "\n";
echo "<br>";
echo test("JS") . "\n";
echo "<br>";
echo test("  ") . "\n";
