<?php
function test($s1)
{
    return substr(substr($s1, 1, strlen($s1) - 1), 0, strlen($s1) - 2);
}

echo test("Hello") . "\n";
echo "<br>";
echo test("Hi") . "\n";
echo "<br>";
echo test("Python") . "\n";
