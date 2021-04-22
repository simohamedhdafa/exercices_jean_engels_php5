<?php
    $chap = isset($_GET['ch']) ? $_GET['ch'] : 2;
    $exo = isset($_GET['ex']) ? $_GET['ex'] : 1;
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
    <h1>Réalisation des exercices du livre : PHP 5 par jean Engels</h1>
    <?php require_once("exercices/$chap/exo$exo.php"); ?>
</body>
</html>