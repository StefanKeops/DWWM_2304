<?php

// Obtenir les informations sur l'utilisation de la mémoire
$memoryUsage = memory_get_usage();
$memoryPeakUsage = memory_get_peak_usage();

// Fonction pour formater la taille de la mémoire en KB, MB, etc.
function formatMemorySize($sizeInBytes)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $formattedSize = $sizeInBytes;

    foreach ($units as $unit) {
        if ($formattedSize < 1024) {
            break;
        }
        $formattedSize /= 1024;
    }

    return round($formattedSize, 2) . ' ' . $unit;
}

// Afficher les informations sur l'utilisation de la mémoire
echo "Utilisation de la mémoire : " . formatMemorySize($memoryUsage) . "\n"; echo "<br>";
echo "Pic d'utilisation de la mémoire : " . formatMemorySize($memoryPeakUsage) . "\n";

?>
