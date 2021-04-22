<?php

    /* solution exercice 7 */
    $nombre = isset($_GET['n']) ? $_GET['n'] : 24;
    $compteur = 0;

    $aleatoire = random_int(0, 10000);
    $compteur++;

    while($aleatoire % $nombre != 0){
        $aleatoire = random_int(0, 10000);
        $compteur++;
    }

    echo "($nombre, $aleatoire) trouvé après $compteur itérations";