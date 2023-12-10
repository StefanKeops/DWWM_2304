<?php
function test($s)
{
    return strlen($s) < 3 ? strtoupper($s) : substr($s, 0, strlen($s) - 3) . strtoupper(substr($s, strlen($s) - 3));
}


echo test("Python") . "\n";
echo "<br>";
echo test("Javascript") . "\n";
echo "<br>";
echo test("js") . "\n";
echo "<br>";
echo test("PHP") . "\n";
