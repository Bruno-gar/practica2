<?php
    require_once 'proveedores.php';
    require_once 'proveedorpdo.php';
    $a = $_POST['Cuit-Proveedor'];
    $b = $_POST['Nombre-Proveedor'];
    $c = $_POST['Telefono-Proveedor'];
    $d = $_POST['Localidad-Proveedor'];
    $e = $_POST['Calle-Proveedor'];
    $f = $_POST['Numero-Proveedor'];

    echo $d;
    $p = new proveedor ("null",$a,$b,$c,$e,$f,$d);
    $pdo = new proveedorpdo();

    echo $pdo->insert($p);
?>