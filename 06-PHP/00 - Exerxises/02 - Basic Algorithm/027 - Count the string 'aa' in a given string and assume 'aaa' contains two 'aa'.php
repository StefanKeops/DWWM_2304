<?php
function test($s)
{
    $ctr_aa = 0;
    for ($i = 0; $i < (strlen($s) - 1); $i++) {
        if (substr($s, $i, 2) == "aa") {
            $ctr_aa++;
        }
    }
    return $ctr_aa;
}


echo test("bbaaccaag") . "\n";
echo "<br>";
echo test("jjkiaaasew") . "\n";
echo "<br>";
echo test("JSaaakoiaa") . "\n";
