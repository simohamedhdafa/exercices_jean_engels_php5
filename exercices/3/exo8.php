<?php

    $a = isset($_GET['a']) ? $_GET['a'] : 5;
    $b = isset($_GET['b']) ? $_GET['b'] : 1;
    try {
        if( gettype($a) != 'integer' or gettype($b) != 'integer')
            throw new TypeError("........................pas entier!");
        while ($a != $b) {
            if( $a > $b ){ $a = $a - $b; }
            else if( $a < $b ){ $b = $b - $a; }
        }
        $pgcd = $a;
    }catch(TypeError $e){
        echo $e->getMessage();
    }

