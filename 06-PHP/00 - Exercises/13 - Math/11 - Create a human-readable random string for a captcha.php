<?php

function generateCaptchaString($length = 6)
{
    $characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ'; // Suppression des caractères ambigus (1, I, 0, O)
    $captchaString = '';

    $max = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $captchaString .= $characters[mt_rand(0, $max)];
    }

    return $captchaString;
}

// Exemple d'utilisation
$captcha = generateCaptchaString();
echo "Captcha généré : $captcha\n";

?>
