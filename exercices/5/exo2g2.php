<?php

// exo 2
$personnes = array(
    'Landry' => array(
                        "nom" => "Sanon", 
                        "ville" => "Ouaga",
                        "age" => 20),
    
    'Abir' => array(
                        "nom" => "Talha",
                        "ville" => "Temara",
                        "age" => 19),

    'Adam' => array(
                        "nom" => "Ryad",
                        "ville" => "Rabat",
                        "age" => 19),
                
    'Hajar' => array(
                        "nom" => "El Menjli",
                        "ville" => "Sale",
                        "age" => 18)
);

// exo3
foreach($personnes as $personne => $proprietes){
    echo $personne . ": <br />";
    foreach($proprietes as $p) echo "*****" . $p ."<br />";
}