<?php
$max_lines = 5; // Set a default value or adjust it based on your needs

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lines = explode("\n", $_POST["input_numbers"]);

    foreach ($lines as $line) {
        $n = intval($line);
        if ($n == 0) {
            break;
        }

        $arr = array();
        $max_val = array();

        if (isset($_POST["numbers"])) {
            for ($i = 0; $i < $n; $i++) {
                // Check if the index exists in the array
                $x = isset($_POST["numbers"][$i]) ? intval($_POST["numbers"][$i]) : 0;

                $arr[$i] = 0;
                $max_val[$i] = -1000000;

                for ($j = 0; $j <= $i; $j++) {
                    $arr[$j] += $x;

                    if ($max_val[$j] < $arr[$j]) {
                        $max_val[$j] = $arr[$j];
                    }
                }
            }
        }

        echo max($max_val) . "\n";
    }
}
?>

<form method="post" action="">
    Enter the number of lines and numbers:<br>
    <textarea name="input_numbers" rows="5" cols="30"></textarea><br>

    <?php
    for ($i = 0; $i < $max_lines; $i++) {
        echo '<input type="text" name="numbers[]" placeholder="Enter number ' . ($i + 1) . '"><br>';
    }
    ?>

    <input type="submit" value="Submit">
</form>