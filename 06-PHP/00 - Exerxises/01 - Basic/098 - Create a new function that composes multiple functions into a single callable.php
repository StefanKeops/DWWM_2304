<?php
function composer()
{
    $fonctions = func_get_args();

    return array_reduce(
        $fonctions,
        function ($transport, $fonction) {
            return function ($x) use ($transport, $fonction) {
                return $fonction($transport($x));
            };
        },
        function ($x) {
            return $x;
        }
    );
}

$composition = composer(
    // adună 2
    function ($x) {
        return $x + 2;
    },
    // înmulțește cu 4
    function ($x) {
        return $x * 4;
    }
);

print_r($composition(2));
echo "<br>";
echo ("\n");
echo "<br>";
print_r($composition(3));
