<?php

require_once 'config.php';
require_once 'model.php';

class CPUController {
    private $model;

    public function __construct() {
        global $conn;
        $this->model = new CPUModel($conn);
    }

    public function getAllCPUs() {
        return $this->model->getAllCPUs();
    }

    public function addCPU($family, $model, $mhz) {
        // Add input validation here
        $this->model->addCPU($family, $model, $mhz);
    }
}
?>
