<?php
function test($s)
{
    $counter = 0;
    for ($i = 0; $i < strlen($s) - 1; $i++) {
        if (substr($s, $i, 1) == 'a') $counter++;
        if ((substr($s, $i, 2) == 'aa') && $counter < 2)
            return true;
    }
    return false;
}

var_dump(test("caabb"));
echo "<br>";
var_dump(test("babaaba"));
echo "<br>";
var_dump(test("aaaaa"));
