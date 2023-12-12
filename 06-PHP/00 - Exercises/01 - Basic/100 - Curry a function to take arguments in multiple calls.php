<?php
function curry($fonction)
{
    $accumulateur = function ($arguments) use ($fonction, &$accumulateur) {
        return function () use ($fonction, $arguments, $accumulateur) {
            $args = func_get_args();
            $arguments = array_merge($arguments, $args);
            $reflection = new ReflectionFunction($fonction);
            $totalArguments = $reflection->getNumberOfRequiredParameters();

            if ($totalArguments <= count($arguments)) {
                return call_user_func_array($fonction, $arguments);
            }

            return $accumulateur($arguments);
        };
    };

    return $accumulateur([]);
}

$additionCourrie = curry(
    function ($a, $b) {
        return $a + $b;
    }
);

$ajouter10 = $additionCourrie(10);
var_dump($ajouter10(15)); // 25
