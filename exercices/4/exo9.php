<?php

    /* corr exo 9 chap 4 */
    $text = "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
    $text_replaced = str_replace("\n", "<br />", $text);

    /*
    echo $text_replaced;
    echo "<br />";
    */

    //echo htmlentities($text_replaced);

    // il faut absolument delimiter \n par double-quotes pour que ça marche (voir exemple de cours) : "\n"
    $text_escaped = addcslashes($text, "\n");

    echo $text_escaped;

    for($i=0; $i<strlen($text); $i++){
        echo $text[$i] . "<br />";
    }