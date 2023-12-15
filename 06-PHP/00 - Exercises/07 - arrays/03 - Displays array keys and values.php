<?php

$ceu = array(
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=>"Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France"=>"Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany"=>"Berlin",
    "Greece"=>"Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid",
    "Sweden"=>"Stockholm",
    "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>"Valetta",
    "Austria"=>"Vienna",
    "Poland"=>"Warsaw",
    "Roumanie" =>"Bucharest"
);

// Trier le tableau par le nom de la capitale
asort($ceu);

// Afficher la capitale et le nom du pays
foreach ($ceu as $pays => $capitale) {
    echo "Capitale de $pays : $capitale<br>";
}

?>
