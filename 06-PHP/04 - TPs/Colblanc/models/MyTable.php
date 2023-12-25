<?php
require "Connexion.php";

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

class MyTable
{
    private $connexion;
    private $table;
    private $nbCol;
    private $tabNomCol;

    public function __construct($maTable)
    {
        $this->table = $maTable;
        $this->connexion = Connexion::getinstance();
    }

    public function readTable()
    {
        $data = array();

        $requete = "SELECT * from " . $this->table;
        $state = $this->connexion->prepare($requete);
        $state->execute();

        $this->tabNomCol = $this->getFieldsNames();

        $data = $state->fetchAll();
        array_unshift($data, $this->tabNomCol);

        return $data;
    }

    private function getFieldsNames()
    {
        // Remove 'identifiant' from the array
        $fieldsNames = array(
            'Nom de l\'etablissement', 'Type', 'Nom du responsable', 'Lieu', 'Téléphone', 'E-mail'
        );

        $this->nbCol = count($fieldsNames);

        return $fieldsNames;
    }

    public function rendreHTML()
    {
        $myArray = [];

        $requete = "SELECT * from " . $this->table;
        $state = $this->connexion->prepare($requete);
        $state->execute();

        $myArray = $state->fetchAll();

        $myString = "<table class='table table-light table-hover'>
                <thead><tr>";

        foreach ($myArray[0] as $key => $value) {
            // Skip the 'identifiant' column when generating the header
            if ($key != 'identifiant') {
                $myString .= "<th>  $key </th>";
            }
        }
        $myString .= "</tr></thead><tbody>";

        for ($i = 0; $i < count($myArray); $i++) {
            $myString .= "<tr>";

            foreach ($myArray[$i] as $key => $value) {
                // Skip the 'identifiant' column when generating the table cells
                if ($key != 'identifiant') {
                    $myString .= "<td>" . $value . "</td>";
                }
            }

            $myString .= "</tr>";
        }

        $myString .= "</tbody></table>";

        return $myString;
    }
}
