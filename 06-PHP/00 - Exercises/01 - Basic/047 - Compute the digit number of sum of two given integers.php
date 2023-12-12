<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $d = numDigits($a + $b);
    echo ("Digit number of sum of two given integers: ");
    echo $d . "\n";
    exit;
}
?>

<form method="post" action="">
    Enter two integers separated by a space:<br>
    <input type="text" name="a" required>
    <input type="text" name="b" required>
    <input type="submit" value="Submit">
</form>

<?php
function numDigits($n)
{
    return (int)(log10($n) + 1);
}
?>