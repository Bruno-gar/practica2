<?php
    require_once 'semis.php';
    require_once 'semispdo.php';
    $a = $_POST['Patente-Semi'];
    $b = $_POST['Kilometros-Semi'];
    $c =$_POST['Año-Semi'];
    $d =$_POST['Marca-Semi'];
    $e = $_POST['Vto-Tecnica-Semi'];
    $f = $_POST['Vto-Senasa-Semi'];
    $g =$_POST['Vto-Bromatologia-Semi'];
    $h =$_POST['Vto-Seguro-Semi'];

    $semis = new semi ($a,$b,$c,$d,$e,$f,$g,$h);
    $pdo = new semisPDO();

    echo $pdo->insert($semis);
?>