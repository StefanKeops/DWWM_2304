<?php
function is_Power_of_three($n)
{
    if ($n <= 0)
    {
        return false;
    }
    while ($n % 3 === 0)
    {
        $n /= 3;
    }
    return $n ===1;
}

$numero = 10;
if(is_Power_of_three($numero))
{
    echo "$numero est une puissance de 3";
}
else
{
    echo "$numero n'est pas  une puissance de 3";
}