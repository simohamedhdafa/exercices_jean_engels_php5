<?php
    /* solution exercice 2 */
    $x = "PostgreSQL";
    echo "\$x = \"PostgreSQL\";"." ==> \$x : $x"; // "PostgreSQL"

    echo '<br>';

    $y = "MySQL";
    echo "\$y = \"MySQL\";"." ==> \$y : $y"; // "MySQL"

    echo '<br>';

    $z = &$x;
    echo "\$z = &\$x"." ==> \$z : $z"; // "PostgreSQL"

    echo '<br>';

    $x = "PHP 5";
    echo "\$x = \"PHP 5\""." ==> \$z : $z"; // "PHP 5"

    echo '<br>';

    $y = &$x;
    echo "\$y = &\$x"." ==> \$y : $y"; // "PHP 5"