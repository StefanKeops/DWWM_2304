<?php
function test($s, $n)
{
    $result = "";
    $frontOfString = 3;

    if ($frontOfString > strlen($s))
        $frontOfString = strlen($s);

    $front = substr($s, 0, $frontOfString);

    for ($i = 0; $i < $n; $i++) {
        $result = $result . $front;
    }
    return $result;
}


echo test("Python", 2) . "\n";
echo "<br>";
echo test("Python", 3) . "\n";
echo "<br>";
echo test("JS", 3) . "\n";
