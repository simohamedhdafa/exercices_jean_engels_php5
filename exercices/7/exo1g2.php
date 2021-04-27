<?php
    function alert_acces_interdit($user, $file, $time){
        $msg = "attention: $user tente d'acceder au fichier protegé $file at $time";
        echo "<script type=\"text/javascript\" > alert(\"$msg\") </script>";
    }

    // l'utilisation
    alert_acces_interdit("hDAFA", "logPrincipal", time());