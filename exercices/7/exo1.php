<?php
    /* fonction pour pop-up alert */
    function attention($a, $b, $c){
        $msg = "l'utilisateur $a atenté d'acceder au fichier $b à l'heure : $c";
        echo "<script type=\"text/javascript\" > alert(\"$msg\") </script>";
    }

    attention("HDAFA", "logPrincipal", time());