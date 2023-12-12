<?php
function test($s1, $s2)
{
    if (strlen($s1) < strlen($s2)) {
        return $s1 . substr($s2, strlen($s2) - strlen($s1));
    } else if (strlen($s1) > strlen($s2)) {
        return  substr($s1, strlen($s1) - strlen($s2)) . $s2;
    } else {
        return $s1 . $s2;
    }
}

echo test("abc", "abcd") . "\n";
echo "<br>";
echo test("Python", "Python") . "\n";
echo "<br>";
echo test("JS", "Python") . "\n";
