<?php

    /*T = {"Anwar":{"Temara", 20}, "Oussama":{"Errachidia", 20}};*/
    
    /* Exercice 2 */
    $T = array("Anwar" => array("Temara" , 19),
                "Youssef" => array("Tetouan", 19),
                "Oussama" => array("Errachidia", 19),
                "Salma" => array("Sale", 19),
                "Ahlam" => array("Temara", 18),
                "Yassine" => array("Casablanca", 21),
                "Yassin" => array("Rabat", 17),
                "FatimaZahrae" => array("Sale", 20),
                "Mehdi" => array("Rabat", 23)            
    );

    /* exercice 3 */
    foreach ($T as $nom => $proprietes){
        echo $nom . ": <br />";
        foreach ($proprietes as $description)
            echo implode(array('....', $description));
        echo "<br />";
    }
    
    
