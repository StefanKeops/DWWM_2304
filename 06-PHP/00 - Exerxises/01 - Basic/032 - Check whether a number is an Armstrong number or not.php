<?php
function armstrong_number($num)
{
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
        $sum = $sum + pow((string)$num{
            $i}, $sl);
    }
    if ((string)$sum == (string)$num) {
        return "True";
    } else {
        return "False";
    }
}
echo "Le 153 est-il le numéro Armstrong ? " . armstrong_number(153);
echo "<br>";
echo "\nEst-ce que le 21 est le numéro Armstrong ? " . armstrong_number(21);
echo "<br>";
echo "\nLe 4587 est-il le numéro Armstrong ? " . armstrong_number(4587);
echo "<br>";
"\n";
