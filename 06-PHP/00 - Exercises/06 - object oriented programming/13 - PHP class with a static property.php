<?php

// Classe Logger
class Logger
{
    // Propriété statique pour compter les messages de journalisation
    private static $logCount = 0;

    // Méthode statique pour journaliser un message
    public static function logMessage($message)
    {
        // Incrémente le compteur de messages de journalisation
        self::$logCount++;

        // Affiche le message avec le numéro de séquence
        echo "Log #" . self::$logCount . ": $message<br>";
    }

    // Méthode statique pour obtenir le nombre total de messages de journalisation
    public static function getLogCount()
    {
        return self::$logCount;
    }
}

// Exemple d'utilisation
try {
    // Journaliser quelques messages
    Logger::logMessage("Premier message");
    Logger::logMessage("Deuxième message");
    Logger::logMessage("Troisième message");

    // Afficher le nombre total de messages de journalisation
    echo "Nombre total de messages de journalisation : " . Logger::getLogCount() . "<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
