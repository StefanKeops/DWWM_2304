<?php
function test($s)
{
    if (strlen($s) >= 2 && substr($s, 0, 2) == "if") {
        return $s;
    }
    return "if " . $s;
}
echo test("if else") . "\n";
echo "<br>";
echo test("else") . "\n";
echo "<br>";
echo test("if") . "\n";
