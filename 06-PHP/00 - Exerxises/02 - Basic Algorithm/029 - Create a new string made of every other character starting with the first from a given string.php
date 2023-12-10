<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i++) {
        if ($i % 2 == 0)
            $result = $result . substr($s, $i, 1);
    }
    return $result;
}

echo test("Python") . "\n";
echo "<br>";
echo test("PHP") . "\n";
echo "<br>";
echo test("JS") . "\n";
