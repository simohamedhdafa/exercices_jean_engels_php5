<?php

    $nombre_aleatoire = random_int(100, 999);
    $compteur = 0;

    /*
    // proposition avec while
    while(true){
        $a = random_int(0, 1000);
        $compteur++;
        if($a == $nombre_aleatoire)
            break;
    }

    echo "$compteur essaies pour tomber sur $nombre_aleatoire";
    */

    // version avec for
    for($compteur=1, $a=random_int(0, 1000); $a!=$nombre_aleatoire; $compteur++){
        
        if($a==$nombre_aleatoire)
            break;
        $a=random_int(0, 1000);
        echo "test $a $nombre_aleatoire" . "<br/>";
    }
    
    echo "$compteur essaies pour tomber sur $nombre_aleatoire";