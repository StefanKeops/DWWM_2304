<?php
function approximatelyEqual($number1, $number2, $epsilon = 0.001)
{
    if (abs($number1 - $number2) < $epsilon)
        return 1;
    else
        return 0;
}
print_r(approximatelyEqual(10.0, 10.00001));
echo ("\n");
print_r(approximatelyEqual(10.0, 10.01));
