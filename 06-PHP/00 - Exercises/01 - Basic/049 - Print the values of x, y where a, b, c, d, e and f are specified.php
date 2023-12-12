<?php
function to_f($e)
{
    return (float)$e;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["input_values"];
    $a = explode(" ", $a);
    $a = array_map("to_f", $a);

    $x = ($a[2] * $a[4] - $a[1] * $a[5]) / ($a[0] * $a[4] - $a[3] * $a[1]);
    $y = ($a[2] * $a[3] - $a[0] * $a[5]) / ($a[1] * $a[3] - $a[0] * $a[4]);

    print("Values of x and y:\n");
    echo "<br>";
    printf("%.3f %.3f\n", $x, $y);
    echo "<br>";
}
?>

<form method="post" action="">
    Enter values for a, b, c, d, e, and f (space-separated):<br>
    <input type="text" name="input_values" required>
    <input type="submit" value="Submit">
</form>