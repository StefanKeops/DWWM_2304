<?php
function test($s1, $word)
{
    return substr($s1, 0, 2) . $word . substr($s1, 2);
}

echo test("[[]]", "Hello") . "\n";
echo "<br>";
echo test("(())", "Hi");
