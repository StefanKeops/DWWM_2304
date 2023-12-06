<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $debt = 100000;

    for ($i = 0; $i < $n; $i++) {
        $debt = ceil(($debt * 1.05) / 1000) * 1000;
    }

    echo "Amount of debt: ";
    echo "<br>";
    echo $debt . PHP_EOL;
    exit;
}
?>

<form method="post" action="">
    Enter the number of months (n):<br>
    <input type="text" name="n" required>
    <input type="submit" value="Submit">
</form>