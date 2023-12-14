<?php

// Classe Logger utilisant le modèle de conception Singleton
class Logger
{
    // Propriété statique pour stocker l'instance unique de la classe
    private static $instance;

    // Propriété pour stocker les messages de journalisation
    private $logMessages = [];

    // Constructeur privé pour empêcher l'instanciation directe
    private function __construct()
    {
        // Empêcher l'instanciation directe depuis l'extérieur
    }

    // Méthode statique pour obtenir l'instance unique de la classe Logger
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            // Créer une nouvelle instance si elle n'existe pas encore
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    // Méthode pour journaliser un message
    public function logMessage($message)
    {
        $this->logMessages[] = $message;
    }

    // Méthode pour obtenir les messages de journalisation
    public function getLogMessages()
    {
        return $this->logMessages;
    }
}

// Exemple d'utilisation
try {
    // Obtenir l'instance unique de la classe Logger
    $logger = Logger::getInstance();

    // Journaliser quelques messages
    $logger->logMessage("Premier message");
    $logger->logMessage("Deuxième message");
    $logger->logMessage("Troisième message");

    // Obtenir les messages de journalisation depuis l'instance unique
    $logMessages = $logger->getLogMessages();

    // Afficher les messages de journalisation
    echo "Messages de journalisation :<br>";
    foreach ($logMessages as $message) {
        echo "$message<br>";
    }

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
