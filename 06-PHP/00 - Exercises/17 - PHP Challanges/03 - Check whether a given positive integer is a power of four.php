<?php
function is_Power_of_four($n)
{
    if ($n <= 0)
    {
        return false;
    }
    while ($n % 4 === 0)
    {
        $n /= 4;
    }
    return $n ===1;
}

$numero = 5;
if(is_Power_of_four($numero))
{
    echo "$numero est une puissance de 4";
}
else
{
    echo "$numero n'est pas  une puissance de 4";
}