<?php
function test($str)
{
    return (strlen($str) < 3 && $str == "C#") || (substr($str, 0, 2) == "C#" && substr($str, 2, 1) == ' ');
}

var_dump(test("C# Sharp"));
echo "<br>";
var_dump(test("C#"));
echo "<br>";
var_dump(test("C++"));
