<?php
    require_once 'camiones.php';
    require_once 'camionespdo.php';
    $a = $_POST['Patente-Camion'];
    $b = $_POST['Kilometros-Camion'];
    $c = $_POST['Año-Camion'];
    $d = $_POST['Marca-Camion'];
    $e = $_POST['Vto-Tecnica-Camion'];
    $f = $_POST['Vto-Senasa-Camion'];
    $g = $_POST['Vto-Bromatologia-Camion'];
    $h = $_POST['Vto-Seguro-Camion'];

    $camiones = new camion ("null",$a,$b,$c,$d,$e,$f,$g,$h);
    $pdo = new camionesPDO();

    echo $pdo->update($camiones);
?>