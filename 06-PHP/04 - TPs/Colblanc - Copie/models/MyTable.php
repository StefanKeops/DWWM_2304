<?php
require "Connexion.php";

class MyTableForm
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getDepartments()
    {
        $query = "SELECT id_dep, name_dep FROM departements";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getInstitutions($selectedDepartment, $selectedInstitutions)
    {
        $query = "SELECT nom_etab, type_etab, nom_resp, CONCAT(adresse, ' ', cp, ' ', ville) AS lieu, Telephone, email FROM institutions WHERE 1";

        // adaugarea de conditii in functie de departamentul selectat
        if (!empty($selectedDepartment)) {
            $query .= " AND depart = :selectedDepartment";
        }

        // adaugarea de conditii in fuctie de institutiile selectate
        if (!empty($selectedInstitutions)) {
            $placeholders = implode(', ', array_map(function ($key) {
                return ":type_etab{$key}";
            }, array_keys($selectedInstitutions)));

            $query .= " AND type_etab IN ({$placeholders})";
        } else {
            // condiție implicită pentru a gestiona cazul când nu este selectat niciun tip
            $query .= " AND 1 = 1";
        }

        // prepararea si executarea cererii
        $statement = $this->connection->prepare($query);

        if (!empty($selectedDepartment)) {
            $statement->bindParam(':selectedDepartment', $selectedDepartment, PDO::PARAM_INT);
        }

        // legarea tipurilor
        foreach ($selectedInstitutions as $key => $value) {
            $paramName = ":type_etab{$key}";
            $statement->bindParam($paramName, $value, PDO::PARAM_STR);
        }

        // executarea cererii
        $statement->execute();

        if (!$statement->execute()) {
            die('Error: ' . implode(', ', $statement->errorInfo()));
        }

        return $statement->fetchAll(PDO::FETCH_ASSOC);

        
        
    }

    
}
?>
