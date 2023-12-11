<?php
function test($s1)
{
    if (strlen($s1) == 1 && substr($s1, 0, 1) == "a") {
        $s1 = substr($s1, 1);
    }

    if (strlen($s1) > 1) {
        if (substr($s1, 1, 1) == "a") {
            $s1 = substr($s1, 0, 1) . substr($s1, 2);
        }

        if (substr($s1, 0, 1) == "a") {
            $s1 = substr($s1, 1);
        }
    }

    return $s1;
}

echo test("abcab") . "\n";
echo "<br>";
echo test("Python") . "\n";
echo "<br>";
echo test("aacda") . "\n";
echo "<br>";
echo test("jython") . "\n";
