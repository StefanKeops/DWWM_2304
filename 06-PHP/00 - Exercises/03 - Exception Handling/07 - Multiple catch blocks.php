<?php
try {
    // Code that may throw different types of exceptions
    $number = "abc";
    
    if (!is_numeric($number)) {
        throw new InvalidArgumentException("Invalid number.");
    }
    
    $result = 100 / $number;
    echo "Result: " . $result;
} catch (InvalidArgumentException $e) {
    // Handle InvalidArgumentException
    echo "InvalidArgumentException: " . $e->getMessage();
} catch (DivisionByZeroError $e) {
    // Handle DivisionByZeroError
    echo "DivisionByZeroError: " . $e->getMessage();
} catch (Throwable $e) {
    // Handle generic Throwable (catches any other type of exception)
    echo "An error occurred: " . $e->getMessage();
}
?>