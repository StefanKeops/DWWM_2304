<?php

class CPUModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCPUs() {
        $stmt = $this->conn->prepare("SELECT * FROM cpu_intel");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCPU($family, $model, $mhz) {
        $stmt = $this->conn->prepare("INSERT INTO cpu_intel (cpu_family, cpu_model, cpu_mhz) VALUES (?, ?, ?)");
        $stmt->execute([$family, $model, $mhz]);
    }
}
?>
