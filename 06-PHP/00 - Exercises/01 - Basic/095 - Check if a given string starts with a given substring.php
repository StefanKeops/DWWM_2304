<?php
function startsWith($haystack, $needle)
{
    return strpos($haystack, $needle) === 0;
}
print_r(startsWith('Hi, this is me', 'Hi'));
