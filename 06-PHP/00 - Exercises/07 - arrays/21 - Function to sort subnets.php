<?php

// Fonction pour trier des sous-réseaux IP
function trierSousReseaux($sousReseaux)
{
    // Utiliser usort pour trier les sous-réseaux
    usort($sousReseaux, function ($a, $b) {
        $ipA = ip2long($a);
        $ipB = ip2long($b);

        // Comparer les adresses IP sous forme numérique
        return $ipA - $ipB;
    });

    return $sousReseaux;
}

// Tableau d'échantillon de sous-réseaux IPv4
$sousReseauxIPv4 = array("192.168.1.0/24", "10.0.0.0/8", "172.16.0.0/16", "192.168.0.0/16");

// Appeler la fonction pour trier les sous-réseaux IPv4
$sousReseauxTriesIPv4 = trierSousReseaux($sousReseauxIPv4);

// Afficher le résultat
echo "Sous-réseaux IPv4 triés : " . implode(', ', $sousReseauxTriesIPv4);

?>
