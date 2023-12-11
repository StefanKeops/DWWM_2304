<?php
function test($s1)
{
    return substr($s1, 2, strlen($s1) - 2) . substr($s1, 0, 2);
}

echo test("Hello") . "\n";
echo "<br>";
echo test("JS");
