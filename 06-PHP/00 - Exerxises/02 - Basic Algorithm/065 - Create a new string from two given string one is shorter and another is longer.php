<?php
function test($s1, $s2)
{
    return strlen($s1) < strlen($s2) ? $s2 . $s1 . $s2 : $s1 . $s2 . $s1;
}

echo test("Hello", "Hi") . "\n";
echo "<br>";
echo test("JS", "Python") . "\n";
