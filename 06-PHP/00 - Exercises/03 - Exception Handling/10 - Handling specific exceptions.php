<?php
class CustomException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

try {
    // Code that may throw a specific exception
    $number = "abc";
    
    if (!is_numeric($number)) {
        throw new CustomException("Invalid number.");
    }
    
    $result = 200 / $number;
    echo "Result: " . $result;
} catch (CustomException $e) {
    // Handle CustomException
    echo "CustomException: " . $e->getMessage();
    // Perform specific actions for CustomException
    // ...
} catch (Exception $e) {
    // Handle generic Exception
    echo "Exception: " . $e->getMessage();
}
?>