<?php
function test($s1)
{
    return substr($s1, 0, 2) == substr($s1, strlen($s1) - 2, 2);
}

var_dump(test("abab"));
echo "<br>";
var_dump(test("abcdef"));
echo "<br>";
var_dump(test("xyzsderxy"));
