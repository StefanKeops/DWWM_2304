<?php
function test($s1, $s2)
{
    return $s1 . $s2 . $s2 . $s1;
}

echo test("Hi", "Hello") . "\n";
echo "<br>";
echo test("whats", "app");
echo "<br>";
