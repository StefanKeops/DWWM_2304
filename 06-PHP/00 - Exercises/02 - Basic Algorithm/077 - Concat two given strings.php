<?php
function test($s1, $s2)
{
    if (strlen($s1) < 1) {
        return $s2;
    }
    if (strlen($s2) < 1) {
        return $s1;
    }
    return substr($s1, strlen($s1) - 1, 1) <> substr($s2, 0, 1) ? $s1 . $s2 : $s1 . substr($s2, 1, strlen($s1) - 1);
}
echo test("abc", "cat") . "\n";
echo "<br>";
echo test("Python", "PHP") . "\n";
echo "<br>";
echo test("php", "php") . "\n";
