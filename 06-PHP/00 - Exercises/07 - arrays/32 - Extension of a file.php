<?php

// Fonction pour obtenir l'extension d'un fichier
function obtenirExtensionFichier($nomFichier)
{
    // Utiliser la fonction pathinfo pour obtenir des informations sur le chemin du fichier
    $infosFichier = pathinfo($nomFichier);

    // Vérifier si l'extension existe dans les informations du fichier
    if (isset($infosFichier['extension'])) {
        // Retourner l'extension du fichier en minuscules
        return strtolower($infosFichier['extension']);
    } else {
        // Retourner null si l'extension n'est pas trouvée
        return null;
    }
}

// Nom de fichier d'échantillon
$nomFichier = "exemple.txt";

// Appeler la fonction pour obtenir l'extension du fichier
$extensionFichier = obtenirExtensionFichier($nomFichier);

// Afficher l'extension du fichier
echo "Extension du fichier $nomFichier : $extensionFichier\n";

?>
