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
    // Code that may throw a custom exception
    $roll_no = -15;
    
    if ($roll_no < 0) {
        throw new CustomException("Roll number cannot be negative.");
    }
    
    echo "Roll number: " . $age;
  } catch (CustomException $e) {
    // Custom exception handling code
    echo "An error occurred: " . $e->getMessage();
}
?>