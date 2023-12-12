<?php
function test($s1, $s2)
{
    $lastChars = "";

    if (strlen($s1) > 0) {
        $lastChars = $lastChars . substr($s1, 0, 1);
    } else {
        $lastChars = $lastChars . "#";
    }

    if (strlen($s2) > 0) {
        $lastChars = $lastChars . substr($s2, strlen($s2) - 1);
    } else {
        $lastChars = $lastChars . "#";
    }

    return $lastChars;
}


echo test("Hello", "Hi") . "\n";
echo "<br>";
echo test("Python", "PHP") . "\n";
echo "<br>";
echo test("JS", "JS") . "\n";
echo "<br>";
echo test("Csharp", "") . "\n";
