<?php
    require_once 'choferes.php';
    require_once 'choferespdo.php';
    $a = $_POST['Cuil-Chofer'];
    $b = $_POST['Nombre-Chofer'];
    $c =$_POST['Apellido-Chofer'];
    $d =$_POST['Telefono-Chofer'];
    $e = $_POST['Vto-Psico-Chofer'];
    $f = $_POST['Vto-Cargas-Peligrosas-Chofer'];
    $g =$_POST['Vto-Ceda-Chofer'];
    $h =$_POST['Vto-Art-Chofer'];

    $chofer = new chofer ("null",$a,$b,$c,$d,$e,$f,$g,$h);
    $pdo = new choferPDO();

    echo $pdo->update($chofer);
?>