<?php
function test($s1)
{
    if (strlen($s1) > 1 && substr($s1, 0, 2) == substr($s1, strlen($s1) - 2)) {
        return substr($s1, 2);
    } else {
        return $s1;
    }
}

echo test("abcab") . "\n";
echo "<br>";
echo test("Python") . "\n";
