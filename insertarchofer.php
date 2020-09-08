<?php
    require_once 'C:\xampp\htdocs\pp2\bd\choferes.php';
    require_once 'C:\xampp\htdocs\pp2\bd\choferespdo.php';
    $chofer []= new chofer (
        $_POST['Cuil-chofer'],
        $_POST['Nombre-Chofer'],
        $_POST['Apellido-Chofer'],
        $_POST['Telefono-Chofer'],
        $_POST['Vto-Psico-Chofer'],
        $_POST['Vto-Cargas-Peligrosas-Chofer'],
        $_POST['Vto-Ceda-Chofer'],
        $_POST['Vto-Art-Chofer'],

    );
    $pdo = new choferPDO();

    echo $pdo->instert($chofer);
?>