<?php 
    require_once 'proveedorpdo.php';
    $localidad = $_POST['localidad'];
    $pdo = new proveedorpdo();
    $pdo->insertarlocalidad($localidad)
?>