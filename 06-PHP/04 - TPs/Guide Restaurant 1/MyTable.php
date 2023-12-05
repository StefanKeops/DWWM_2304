<?php

class MyTable
{
    private $connexion;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->connexion = new mysqli($servername, $username, $password, $dbname);

        if ($this->connexion->connect_error) {
            die("La connexion à la base de données a échoué : " . $this->connexion->connect_error);
        }

        $result = $this->connexion->query("SELECT * FROM restaurants");
    }

    public function selectData()
    {
        $result = $this->connexion->query("SELECT * FROM restaurants");

        if ($result->num_rows > 0) {
            echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nom restaurant</th>
                <th>Adresse restaurant</th>
                <th>Prix </th>
                <th>Commentaire</th>
                <th>Note</th>
                <th>Date visite</th>
            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['adresse']}</td>
                    <td>{$row['prix']}</td>
                    <td>{$row['Commentaire']}</td>
                    <td>{$row['Note']}</td>
                    <td>{$row['visite']}</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "Aucun restaurant trouvé.";
        }
    }

    public function infoTable($tableName) {
        $columns = array();
 
        $query = "SHOW COLUMNS FROM $tableName";
        $result = $this->connexion->query($query);
 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $columns[] = $row['Field'];
            }
        }
 
        return $columns;
    }

    public function __destruct()
    {
        if ($this->connexion) {
            $this->connexion->close();
        }
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guide";

$myTable = new MyTable($servername, $username, $password, $dbname); echo "<br>";

$tableColumns = $myTable->infoTable("restaurants");
print_r($tableColumns);
