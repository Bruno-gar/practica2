<?php
    require_once 'choferes.php';
    require_once 'choferespdo.php';
    $b = $_POST['Nombre-Chofer'];
    echo $b;
    $c =$_POST['Apellido-Chofer'];
    $a = $_POST['Cuil-chofer'];
    $d =$_POST['Telefono-Chofer'];
    $e = $_POST['Vto-Psico-Chofer'];
    $f = $_POST['Vto-Cargas-Peligrosas-Chofer'];
    $g =$_POST['Vto-Ceda-Chofer'];
    $h =$_POST['Vto-Art-Chofer'];

    $chofer = new chofer ($a,$b,$c,$d,$f,$g,$h);
    $pdo = new choferPDO();

    echo $pdo->insert($chofer);
?>