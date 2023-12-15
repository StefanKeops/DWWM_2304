<?php

// Tableau d'échantillon
$color = array(
    "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("First", 5 => "Second", "Third")
);

// Afficher "Second" et "Red"
echo "Élément 'Second' du tableau : " . $color["holes"][5] . "<br>";
echo "Élément 'Red' du tableau : " . $color["color"]["a"];

?>
