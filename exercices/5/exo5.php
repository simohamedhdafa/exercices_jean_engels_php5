<?php

    $nav_alea = array("facebook" => "www.facebook.com",
                    "linkedin" => "www.linkedin.com",
                    "twitter" => "www.twitter.com",
                    "pinterest" => "www.pinterest.com",
                    "instagram" => "www.instagram.com",
                    "youtube" => "www.youtube.com",
                    "wikipedia" => "www.wikipedia.com",
                    "google" => "www.google.fr",
                    "yncreamaroc" => "www.yncreamaroc.ma"
                );

    shuffle($nav_alea);
    /*
                array(0 => "www.facebook.com",
                    1 => "www.linkedin.com",
                    2 => "www.twitter.com",
                    ...
                );
    */
    echo "clickez <a href=\"https://" . current($nav_alea) . "\" target=\"_blank\">ici</a>" ;