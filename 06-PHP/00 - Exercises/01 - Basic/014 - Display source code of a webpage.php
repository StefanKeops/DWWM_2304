<?php
$all_lines = file('https://www.w3resource.com');

foreach ($all_lines as $line_num => $line) {

    echo "Numéro de ligne-{$line_num}: " . htmlspecialchars($line) . "\n"; echo "<br>";
}
?>