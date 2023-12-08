<?php
function find_last_Index($items, $func)
{
    $keys = array_keys(array_filter($items, $func));

    return array_pop($keys);
}

echo find_last_Index([1, 2, 3, 4], function ($n) {
    return ($n % 2) === 1;
});

echo "\n";
echo "<br>";
echo find_last_Index([1, 2, 3, 4], function ($n) {
    return ($n % 2) === 0;
});
