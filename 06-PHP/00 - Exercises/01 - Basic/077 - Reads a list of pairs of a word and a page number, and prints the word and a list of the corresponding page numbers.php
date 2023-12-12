<?php
// Generăm o valoare aleatoare pentru input (simulăm intrarea standard)
$inputAleatoriu = "chien 5\nchat 3\nchien 8\noiseau 10\nchat 1\noiseau 7";

// Inițializăm array-ul pentru pagini
$pagina = array();

// Parcurgem liniile simulate din input
foreach (explode("\n", $inputAleatoriu) as $linie) {
    // Descompunem linia în cuvânt și numărul paginii
    list($cuvant, $paginaNumar) = explode(" ", trim($linie));

    // Verificăm dacă cuvântul există deja în array-ul de pagini
    if (!isset($pagina[$cuvant])) {
        $pagina[$cuvant] = array();
    }

    // Adăugăm numărul paginii la array-ul corespunzător cuvântului
    $pagina[$cuvant][] = $paginaNumar;
}

// Sortăm array-ul după cheie (cuvânt)
ksort($pagina);

echo "Le mot et la liste des numéros de page correspondants:\n";

// Parcurgem array-ul și afișăm cuvântul și paginile corespunzătoare
foreach ($pagina as $cuvant => $arr) {
    // Sortăm paginile numeric
    sort($arr, SORT_NUMERIC);

    // Afișăm cuvântul
    echo $cuvant . "\n";

    // Afișăm paginile separate prin spațiu
    echo implode($arr, " ") . "\n";
}
