<?php
function test($s1)
{

    return substr($s1, strlen($s1) - 2, 2);
}

var_dump(test("Hello"));
echo "<br>";
var_dump(test("Python"));
echo "<br>";
var_dump(test("on"));
echo "<br>";
var_dump(test("o"));
