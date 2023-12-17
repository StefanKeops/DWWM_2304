<?php

// Set the timezone
date_default_timezone_set('UTC'); // Change 'UTC' to your desired timezone

// String of characters for password generation
$characterString = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

// Password length (can be adjusted)
$passwordLength = 8;

// Generate a random password
$password = generatePassword($characterString, $passwordLength);

// Display the generated password
echo "Generated password: $password";

// Function to generate a random password
function generatePassword($characterString, $passwordLength) {
    $password = '';
    $characterStringLength = strlen($characterString);

    for ($i = 0; $i < $passwordLength; $i++) {
        $randomIndex = mt_rand(0, $characterStringLength - 1);
        $password .= $characterString[$randomIndex];
    }

    return $password;
}

?>
