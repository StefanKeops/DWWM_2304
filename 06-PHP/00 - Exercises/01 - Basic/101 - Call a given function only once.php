<?php

function uneSeuleFois($fonction)
{
    return function () use ($fonction) {
        static $appele = false;
        if ($appele) {
            return;
        }
        $appele = true;
        $args = func_get_args();
        return call_user_func_array($fonction, $args);
    };
}

$addition = function ($a, $b) {
    return $a + $b;
};

$uneSeuleFois = uneSeuleFois($addition);

var_dump($uneSeuleFois(10, 5));
echo "<br>";
var_dump($uneSeuleFois(20, 10));
