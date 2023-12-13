<?php
// Path to the binary file
$binaryFilePath = 'dwsample1-bin.bin';

// Check if the file exists
if (file_exists($binaryFilePath)) {
    // Open the binary file for reading
    $fileHandle = fopen($binaryFilePath, 'rb');

    if ($fileHandle) {
        // Read the entire contents of the binary file
        $fileContents = fread($fileHandle, filesize($binaryFilePath));

        // Close the file handle
        fclose($fileHandle);

        // Display the binary data
        echo $fileContents;
    } else {
        echo "Error opening the binary file.";
    }
} else {
    echo "The binary file does not exist.";
}
?>
