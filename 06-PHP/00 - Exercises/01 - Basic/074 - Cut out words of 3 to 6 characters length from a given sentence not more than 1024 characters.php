<?php
// Generăm o valoare aleatoare pentru input (simulăm intrarea standard)
$inputAleatoriu = "Ceci est un exemple de phrase avec des mots de différentes longueurs.";

echo "Chaîne d'origine: " . $inputAleatoriu;
$mots = preg_split("/[\s,\.]/", $inputAleatoriu);
$motsFiltres = array();

for ($i = 0; $i < count($mots); $i++) {
    if (strlen($mots[$i]) > 2 && strlen($mots[$i]) < 7) {
        $motsFiltres[] = $mots[$i];
    }
}

echo "\nMots de 3 à 6 caractères de longueur: ";
echo "<br>";
print implode(' ', $motsFiltres) . PHP_EOL;
