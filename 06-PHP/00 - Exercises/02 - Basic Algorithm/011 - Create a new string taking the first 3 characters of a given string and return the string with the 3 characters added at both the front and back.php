<?php
function test($str)
{
    if (strlen($str) < 3) {
        return $str . $str . $str;
    } else {
        $front = substr($str, 0, 3);
        return $front . $str . $front;
    }
}
echo test("Python") . "\n";
echo "<br>";
echo test("JS") . "\n";
echo "<br>";
echo test("Code") . "\n";
