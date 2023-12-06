<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = isset($_POST["n"]) ? intval($_POST["n"]) : 0;

    for ($i = 0; $i < count($_POST["xa"]); $i++) {
        $xa = doubleval($_POST["xa"][$i]);
        $ya = doubleval($_POST["ya"][$i]);
        $ra = doubleval($_POST["ra"][$i]);
        $xb = doubleval($_POST["xb"][$i]);
        $yb = doubleval($_POST["yb"][$i]);
        $rb = doubleval($_POST["rb"][$i]);

        $r = sqrt(($xb - $xa) * ($xb - $xa) + ($yb - $ya) * ($yb - $ya));

        if ($r + $ra < $rb) {
            echo "C1 est en C2\n";
            continue;
        }

        if ($r + $rb < $ra) {
            echo "C2 est en C1.\n";
            continue;
        }

        if ($r <= $ra + $rb) {
            echo "Circonférence de l'intersection de C1 et C2.";
            continue;
        }

        echo "C1 et C2 ne se chevauchent pas.\n";
    }
}
?>

<form method="post" action="">
    Enter the value of n (number of cases):<br>
    <input type="text" name="n"><br>

    <?php
    for ($i = 0; $i < $n; $i++) {
        echo "Case " . ($i + 1) . ":<br>";
        echo "xa: <input type='text' name='xa[]'><br>";
        echo "ya: <input type='text' name='ya[]'><br>";
        echo "ra: <input type='text' name='ra[]'><br>";
        echo "xb: <input type='text' name='xb[]'><br>";
        echo "yb: <input type='text' name='yb[]'><br>";
        echo "rb: <input type='text' name='rb[]'><br>";
    }
    ?>

    <input type="submit" value="Submit">
</form>