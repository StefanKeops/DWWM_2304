<?php
// Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST  (web server)
if (defined('STDIN')) {
    $stdin = trim(fgets(STDIN));
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stdin = $_POST["input_numbers"];
} else {
    // Gestionați alte cazuri sau părăsiți scriptul
    exit("Source d'entrée invalide");
}

$nums = explode(" ", $stdin);
rsort($nums);

print("Après avoir trié lesdits entiers:\n");
echo implode(' ', $nums);
