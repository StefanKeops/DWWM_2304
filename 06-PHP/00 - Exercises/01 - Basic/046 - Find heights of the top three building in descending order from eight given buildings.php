<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heights = array();
    foreach ($_POST['building_height'] as $line) {
        $heights[] = (int)$line;
    }
    rsort($heights);

    print("Heights of the top three buildings:\n");
    echo $heights[0] . "\n";
    echo $heights[1] . "\n";
    echo $heights[2] . "\n";
}
?>

<form method="post" action="">
    Enter the heights of eight buildings:<br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="text" name="building_height[]" required><br>
    <input type="submit" value="Submit">
</form>