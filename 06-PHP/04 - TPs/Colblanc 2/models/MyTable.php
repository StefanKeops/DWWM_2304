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

    public function getInstitutions($selectedDepartment, $selectedInstitutions=[])
    {
        $query = "SELECT nom_etab, type_etab, nom_resp, CONCAT(adresse, ' ', cp, ' ', ville) AS lieu, Telephone, email FROM institutions WHERE ";

        // adaugarea de conditii in functie de departamentul selectat
        if (!empty($selectedDepartment)) {
            $query .= "  depart = ?";
            
           

            if (!empty($selectedInstitutions)) {

               // var_dump( $selectedInstitutions);
                // $placeholders = implode(', ', array_map(function ($key) {
                //     return ":type_etab{$key}";
                // }, array_keys($selectedInstitutions)));
    
               // $test= implode( ',', $selectedInstitutions);
               // echo $test;
               $test="";
               foreach ($selectedInstitutions as $key => $value) {
                $test.=",'".$value."'";
               }
               $test=substr($test,1);
                $query .= "  AND  type_etab IN ($test)";
              
            
            }


        }

        // adaugarea de conditii in fuctie de institutiile selectate
       
        else {
            // condiție implicită pentru a gestiona cazul când nu este selectat niciun tip
            $query .= " 1 = 1";
        }

        // prepararea si executarea cererii
        echo $query; 
        $statement = $this->connection->prepare($query);

        if (!empty($selectedDepartment)) {


            $statement->execute([$selectedDepartment]);
        $tab= $statement->fetchAll(PDO::FETCH_ASSOC);
       // var_dump($tab);

          //  $statement->bindParam(':selectedDepartment', $selectedDepartment, PDO::PARAM_INT);
        }
        else {
            $statement->execute();
            $tab=  $statement->fetchAll(PDO::FETCH_ASSOC); 

           // 
        }

        

        // legarea tipurilor
        // foreach ($selectedInstitutions as $key => $value) {
        //     $paramName = ":type_etab{$key}";
        //     $statement->bindParam($paramName, $value, PDO::PARAM_STR);
        // }

        // executarea cererii
       
        // if (!$statement->execute()) {
            
        //     die('Error: ' . implode(', ', $statement->errorInfo()));
        // }
        var_dump($tab);
        return $tab;

        
        
    }

    
}
?>
