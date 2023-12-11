<?php
function test($s1)
{
    $extra_Front = "";

    if (strlen($s1) < 2) {
        return $s1 . $s1 . $s1;
    } else {
        $extra_Front = substr($s1, 0, 2);
        return $extra_Front . $extra_Front . $extra_Front;
    }
}

echo test("abc") . "\n";
echo "<br>";
echo test("Python") . "\n";
echo "<br>";
echo test("J") . "\n";
