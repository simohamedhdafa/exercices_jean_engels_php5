<?php

    /* exercice 6 du chap 3 */
    $tab = array();
    for($i=11; $i<=36; $i++){
        $tab[$i] = chr($i+54);
    }

    echo "<pre>";
    print_r($tab);
    echo "</pre>";