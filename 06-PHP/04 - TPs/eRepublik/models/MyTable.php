<?php
require('connexion.php');
require('data/style.css');

function fetchDataFromDatabase()
{
    $db = Connexion::getInstance();

    if ($db) {
        $sql = "SELECT * FROM myTable";
        $result = $db->query($sql);

        if ($result->rowCount() > 0) {
            $eRepublikData = array();
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $eRepublikData['rows'][] = $row;
            }
            $result->closeCursor();

            return $eRepublikData;
        }
    }

    return null;
}
?>