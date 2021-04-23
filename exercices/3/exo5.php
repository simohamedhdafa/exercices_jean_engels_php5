<?php

    /* sol de l'exercice 5 ch 3 */
    $compteur = 0;
    $a1 = $a2 = $a3 = NULL;

    while(true){
        $a1 = random_int(0, 999);
        $compteur ++;
        if($a1%2!=0){
           $a2 = random_int(0, 999);
           $compteur ++;
           if($a2%2==0){
               $a3 = random_int(0, 999);
               $compteur ++;
               if($a3%2==0){
                   echo "apres $compteur iterations, ($a1, $a2, $a3)";
                   break;
               }
           }
        }
    }