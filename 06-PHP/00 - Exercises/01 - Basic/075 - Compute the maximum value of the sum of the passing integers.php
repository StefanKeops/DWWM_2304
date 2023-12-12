<?php
class Noeud
{
    public $partie_gauche;
    public $partie_droite;
    public $valeur;
    public $plus_grand;

    public function __construct($valeur)
    {
        $this->valeur = $valeur;
    }

    public function valeur_max()
    {
        if ($this->plus_grand !== null) {
            return $this->plus_grand;
        }
        if (is_null($this->partie_gauche) && is_null($this->partie_droite)) {
            return $this->valeur;
        }
        $partie_gauche  = is_null($this->partie_gauche)  ? -1 : $this->partie_gauche->valeur_max();
        $partie_droite = is_null($this->partie_droite) ? -1 : $this->partie_droite->valeur_max();

        return $this->plus_grand = $this->valeur + max($partie_gauche, $partie_droite);
    }
}

$diamant = array();

// Generăm o valoare aleatoare pentru input (simulăm intrarea standard)
$inputAleatoriu = "3, 7, 4\n2, 4, 6\n8, 5, 9\n3, 2, 8\n9, 6, 3";

echo "Diamant original: \n" . $inputAleatoriu;
echo "<br>";

$diamant = array_map(function ($line) {
    return explode(',', $line);
}, explode("\n", $inputAleatoriu));

$noeuds = array();
for ($i = 0; $i < count($diamant); $i++) {
    for ($j = 0; $j < count($diamant[$i]); $j++) {
        $noeuds[$i][$j] = new Noeud($diamant[$i][$j]);
    }
}

for ($i = 0; $i < count($noeuds); $i++) {
    for ($j = 0; $j < count($noeuds[$i]); $j++) {
        $n = $noeuds[$i][$j];
        if ($i < count($diamant) / 2 - 1) {
            $n->partie_gauche  = isset($noeuds[$i + 1][$j])     ? $noeuds[$i + 1][$j]     : null;
            $n->partie_droite = isset($noeuds[$i + 1][$j + 1]) ? $noeuds[$i + 1][$j + 1] : null;
        } else {
            $n->partie_gauche  = isset($noeuds[$i + 1][$j - 1]) ? $noeuds[$i + 1][$j - 1] : null;
            $n->partie_droite = isset($noeuds[$i + 1][$j])     ? $noeuds[$i + 1][$j]     : null;
        }
    }
}

$sommet = $noeuds[0][0];

echo "Valeur maximale du diamant: " . $sommet->valeur_max() . "\n";
echo "<br>";
