<?php
    $x="PostgreSQL";
    $y="MySQL";
    $z=&$x;
    $x="PHP 5";
    $y=&$x;
    $t = "hello";
    $toto;

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";

    echo $GLOBALS['GLOBALS']['x'];