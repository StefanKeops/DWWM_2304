<?php
while (true) {
    // Verificați dacă STDIN este definit (linia de comandă) sau dacă este o solicitare POST (server web)
    if (defined('STDIN')) {
        $input = trim(fgets(STDIN));
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["n"];
    } else {
        // Gestionați alte cazuri sau părăsiți bucla
        exit("Source d'entrée invalide");
    }

    // Convertiți intrarea într-un număr întreg
    $input = intval($input);

    $count = 0;
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            for ($k = 0; $k < 10; $k++) {
                for ($l = 0; $l < 10; $l++) {
                    if ($i + $j + $k + $l === $input) {
                        $count++;
                    }
                }
            }
        }
    }

    echo "\nNombre de combinaisons de a, b, c et d: ";
    echo $count . "\n";
}
