<?php error_reporting (0); ?>

<table border="1">
    <tr>
        <td>instructions</td><td>$x</td><td>$a</td><td>$a[0]</td><td>$y</td><td>$z</td>
    </tr>
    <?php $x="PHP5"; ?>
    <tr>
        <td><?php echo addslashes('$x="PHP5";') ?></td>
        <td><?php echo isset($x) ? $x." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? $a : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? $y : 'ND' ?></td>
        <td><?php echo isset($z) ? $z : 'ND' ?></td>
    </tr>
    <?php $a[]=&$x; ?>
    <tr>
        <td><?php echo addslashes('$a[]=&$x;') ?></td>
        <td><?php echo isset($x) ? strval($x)." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? strval(implode($a))." (".gettype($a).")" : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? $y : 'ND' ?></td>
        <td><?php echo isset($z) ? $z : 'ND' ?></td>
    </tr>
    <?php $y=" 5 eme version de PHP"; ?>
    <tr>
        <td><?php echo addslashes('$y=" 5 eme version de PHP";') ?></td>
        <td><?php echo isset($x) ? strval($x)." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? strval(implode($a))." (".gettype($a).")" : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? strval($y)." (".gettype($y).")" : 'ND' ?></td>
        <td><?php echo isset($z) ? $z : 'ND' ?></td>
    </tr>  
    <?php $z = $y*10; ?> 
    <tr>
        <td><?php echo addslashes('$z=$y*10;') ?></td>
        <td><?php echo isset($x) ? strval($x)." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? strval(implode($a))." (".gettype($a).")" : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? strval($y)." (".gettype($y).")" : 'ND' ?></td>
        <td><?php echo isset($z) ? strval($z)." (".gettype($z).")" : 'ND' ?></td>
    </tr>
    <?php $x.=$y; ?>
    <tr>
        <td><?php echo addslashes('$x.=$y;') ?></td>
        <td><?php echo isset($x) ? strval($x)." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? strval(implode($a))." (".gettype($a).")" : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? strval($y)." (".gettype($y).")" : 'ND' ?></td>
        <td><?php echo isset($z) ? strval($z)." (".gettype($z).")" : 'ND' ?></td>
    </tr>
    <?php $y*=$z; ?>
    <tr>
        <td><?php echo addslashes('$y*=$z;') ?></td>
        <td><?php echo isset($x) ? strval($x)." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? strval(implode($a))." (".gettype($a).")" : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? strval($y)." (".gettype($y).")" : 'ND' ?></td>
        <td><?php echo isset($z) ? strval($z)." (".gettype($z).")" : 'ND' ?></td>
    </tr> 
    <?php $a[0]="MySQL"; ?>
    <tr>
        <td><?php echo addslashes('$a[0]="MySQL";') ?></td>
        <td><?php echo isset($x) ? strval($x)." (".gettype($x).")" : 'ND' ?></td>
        <td><?php echo isset($a) ? strval(implode($a))." (".gettype($a).")" : 'ND' ?></td>
        <td><?php echo isset($a[0]) ? $a[0] : 'ND' ?></td>
        <td><?php echo isset($y) ? strval($y)." (".gettype($y).")" : 'ND' ?></td>
        <td><?php echo isset($z) ? strval($z)." (".gettype($z).")" : 'ND' ?></td>
    </tr> 
</table>

