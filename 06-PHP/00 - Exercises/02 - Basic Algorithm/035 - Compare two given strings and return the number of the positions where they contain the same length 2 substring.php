<?php
function test($s1, $s2)
{
    $ctr = 0;
    for ($i = 0; $i < strlen($s1) - 1; $i++) {
        $firstString = substr($s1, $i, 2);
        for ($j = 0; $j < strlen($s2) - 1; $j++) {
            $secondString = substr($s2, $j, 2);
            if ($firstString == $secondString)
                $ctr++;
        }
    }
    return $ctr;
}

echo (test("abcdefgh", "abijsklm")) . "\n";
echo "<br>";
echo (test("abcde", "osuefrcd")) . "\n";
echo "<br>";
echo (test("pqrstuvwx", "pqkdiewx")) . "\n";
