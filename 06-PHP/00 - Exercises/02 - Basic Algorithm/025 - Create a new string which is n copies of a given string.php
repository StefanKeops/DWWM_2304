<?php
function test($s, $n)
{
    $result = "";
    for ($i = 0; $i < $n; $i++) {
        $result = $result . $s;
    }
    return $result;
}


echo test("JS", 2) . "\n";
echo "<br>";
echo test("JS", 3) . "\n";
echo "<br>";
echo test("JS", 1) . "\n";
