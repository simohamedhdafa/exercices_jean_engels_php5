<?php
    $chap = isset($_GET['ch']) ? $_GET['ch'] : 2;
    $exo = isset($_GET['ex']) ? $_GET['ex'] : 1;
    $self = $_SERVER['DOCUMENT_ROOT'] . "/exercices";
    $dirs = scandir($self);
    
    $s_reps = array();

    foreach($dirs as $d)
        if(is_numeric($d))
            array_push($s_reps, $d);
    
    $exos = array();

    foreach($s_reps as $s_s_r){
        //echo $s_s_r;
        $ssr = $_SERVER['DOCUMENT_ROOT'] . "/exercices" . "/$s_s_r";
        //echo $ssr;
        $files = scandir($ssr);

        foreach($files as $f){
            if(strpos($f, "exo")===0){
                $relatif = substr($ssr, strpos($ssr, "exercices/"));
                //echo $relatif;
                array_push($exos, $relatif . "/$f");
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Réalisation des exercices du livre : PHP 5 par Jean ENGELS</h1>
    <?php
        foreach($exos as $x){
            echo "<a href=\"$x\">".substr($x, 10)."</a><br>";
        }
        require_once("exercices/$chap/exo$exo.php"); 
    ?>
</body>
</html>