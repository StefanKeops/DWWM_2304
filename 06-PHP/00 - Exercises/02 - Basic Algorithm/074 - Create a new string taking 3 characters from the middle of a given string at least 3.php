<?php
function test($s1)
{

    return substr($s1, (strlen($s1) - 1) / 2 - 1, 3);
}

echo test("Hello") . "\n";
echo "<br>";
echo test("Python") . "\n";
echo "<br>";
echo test("abc") . "\n";
