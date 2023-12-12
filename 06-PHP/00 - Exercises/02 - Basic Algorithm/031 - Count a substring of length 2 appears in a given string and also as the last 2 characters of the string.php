<?php
function test($s)
{
    $last_two_char = substr($s, strlen($s) - 2, 2);
    $ctr = 0;

    for ($i = 0; $i < strlen($s) - 2; $i++) {
        if (substr($s, $i, 2) == $last_two_char)
            $ctr = $ctr + 1;
    }
    return $ctr;
}

echo test("abcdsab") . "\n";
echo "<br>";
echo test("abcdabab") . "\n";
echo "<br>";
echo test("abcabdabab") . "\n";
echo "<br>";
echo test("abcabd") . "\n";
