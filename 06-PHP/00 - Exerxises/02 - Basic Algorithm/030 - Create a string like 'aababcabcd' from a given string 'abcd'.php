<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i++) {
        $result = $result . substr($s, 0, $i + 1);
    }
    return $result;
}

echo test("abcd") . "\n";
echo "<br>";
echo test("abc") . "\n";
echo "<br>";
echo test("a") . "\n";
