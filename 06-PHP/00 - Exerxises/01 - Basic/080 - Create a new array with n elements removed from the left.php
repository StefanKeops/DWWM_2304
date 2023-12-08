<?php
function drop_from_left($items, $n = 1)
{
    return array_slice($items, $n);
}
print_r(drop_from_left([1, 2, 3]));
echo "<br>";
print_r(drop_from_left([1, 2, 3, 4], 2));
