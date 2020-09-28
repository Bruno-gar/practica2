<?php
    require_once 'proveedores.php';
    require_once 'proveedorpdo.php';
    $a = $_POST['Cuit-Proveedor'];
    $b = $_POST['Nombre-Proveedor'];
    $c = $_POST['Telefono-Proveedor'];
    $d = $_POST['Localidad-Proveedor'];
    $e = $_POST['Calle-Proveedor'];
    $f = $_POST['Numero-Proveedor'];

    $p = new proveedor ($a,$b,$c,$d,$e,$f);
    $pdo = new proveedorpdo();

    echo $pdo->insert($p);
?>