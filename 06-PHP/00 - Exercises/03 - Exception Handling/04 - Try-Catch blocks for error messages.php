<?php
try {
    // Cod care poate arunca diferite tipuri de excepții
    $file = "test.txt";
    
    // Aruncă o excepție RuntimeException dacă fișierul nu există
    if (!file_exists($file)) {
        throw new RuntimeException("Fișierul nu există.");
    }
    
    // Deschide fișierul în modul citire
    $handle = fopen($file, "r");
    
    // Aruncă o excepție generică dacă deschiderea fișierului eșuează
    if (!$handle) {
        throw new Exception("Eroare la deschiderea fișierului.");
    }
    
    // Realizează unele operațiuni cu fișierul
    // ...
    
    // Închide fișierul
    fclose($handle);
} catch (RuntimeException $e) {
    // Gestionează excepția RuntimeException
    echo "RuntimeException: " . $e->getMessage();
} catch (Exception $e) {
    // Gestionează excepția generică Exception
    echo "Exception: " . $e->getMessage();
}

// Curăță resursele sau efectuează acțiuni finale
echo "Execuția scriptului s-a încheiat.";
?>
