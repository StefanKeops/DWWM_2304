<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i = $i + 4) {
        $c = $i + 2;
        $n = 0;
        $z = $c > strlen($s) ? 1 : 2;
        $n = $n + $z;
        $result = $result . substr($s, $i, $n);
    }
    return $result;
}

echo (test("Python")) . "\n";
echo "<br>";
echo (test("JavaScript")) . "\n";
echo "<br>";
echo (test("HTML")) . "\n";
