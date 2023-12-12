<?php
class DatabaseConnectionException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

function connectToDatabase($host, $username, $password, $database) {
    // Simulate a database connection attempt
    $success = false;

    // Check if the connection was successful
    if (!$success) {
        throw new DatabaseConnectionException("Failed to connect to the database.");
    }

    // Return the database connection object if successful
    return $databaseConnection;
}

try {
    $host = "localhost";
    $username = "root";
    $password = "password";
    $database = "database";

    $databaseConnection = connectToDatabase($host, $username, $password, $database);
    echo "Database connection successful!";
} catch (DatabaseConnectionException $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>