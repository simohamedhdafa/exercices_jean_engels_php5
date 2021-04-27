<?php
    function shuffle_assoc(&$array) {
        /**
         * autor : ahmad at ahmadnassri dot com 
         */
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return true;
    }
    //$sites = array("www.google.com", "www.facebook.com");

    $sites = array(
        "facebook" => "www.facebook.com",
        "google" => "www.google.fr",
        "linkedin" => "www.linkedin.com",
        "yncreamaroc" => "www.yncreamaroc.ma",
        "youtube" => "www.youtube.com",
        "twitter" => "www.twitter.com",
        "instagram" => "www.instagram.com",
        "whatsappweb" => "www.whatsappweb.com"
    );
    foreach($sites as $k=>$v){
        echo $k . " " . $v . "<br/>";
    }

    shuffle_assoc($sites);
    // maintenant le tableau $sites est mélangé
    //echo "clickez <a href=\"https://".current($sites)."\" target=\"_blank\">ici</a>" ;

    foreach($sites as $k=>$v){
        echo $k . " " . $v . "<br/>";
    }