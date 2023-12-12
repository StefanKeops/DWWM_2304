<?php
function memoization($fonction)
{
    return function () use ($fonction) {
        static $cache = [];

        $arguments = func_get_args();
        $cle = serialize($arguments);
        $miseEnCache = true;

        if (!isset($cache[$cle])) {
            $cache[$cle] = call_user_func_array($fonction, $arguments);
            $miseEnCache = false;
        }

        return ['resultat' => $cache[$cle], 'mise_en_cache' => $miseEnCache];
    };
}

$fonctionAdditionMémorisée = memoization(
    function ($num) {
        return $num + 10;
    }
);

var_dump($fonctionAdditionMémorisée(5));
echo "<br>";
var_dump($fonctionAdditionMémorisée(6));
echo "<br>";
var_dump($fonctionAdditionMémorisée(5));
