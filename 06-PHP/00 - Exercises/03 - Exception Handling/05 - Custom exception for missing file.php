<?php
class FileNotExistException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

function readDataFromFile($filename) {
    if (!file_exists($filename)) {
        throw new FileNotExistException("File does not exist: $filename");
    }
    
    // Read data from the file and return it
    $data = file_get_contents($filename);
    return $data;
}

try {
    $filename = "test.txt";
    $data = readDataFromFile($filename);
    echo "Data from $filename: " . $data;
} catch (FileNotExistException $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>