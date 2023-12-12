<?php
function validateString($inputString) {
    if (empty($inputString)) {
        throw new Exception("String should not be empty!");
    }
}

try {
    $string = "";
    validateString($string);
    echo "Valid string: " . $string;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>