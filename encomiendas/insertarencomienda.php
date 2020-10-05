<?php
    require_once 'encomienda.php';
    require_once 'encomiendapdo.php';
    $a = $_POST['fecha-encomienda'];
    $b = $_POST['chofer-encomienda'];
    $c =$_POST['camion-encomienda'];
    $d =$_POST['semi-encomienda'];
    $e = $_POST['proveedor-encomienda'];
    $f = $_POST['inporte-encomienda'];
    $e = new encomienda ("null",$a,$b,$c,$d,$e,$f);
    $pdo = new encomiendapdo();

    echo $pdo->insert($e);
?>