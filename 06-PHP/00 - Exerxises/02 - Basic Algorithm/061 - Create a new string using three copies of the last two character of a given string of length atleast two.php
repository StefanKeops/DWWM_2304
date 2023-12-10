<?php
function test($s1)
{
    $last2 = substr($s1, strlen($s1) - 2);
    return $last2 . $last2 . $last2;
}

echo test("Hello") . "\n";
echo "<br>";
echo test("Hi");
