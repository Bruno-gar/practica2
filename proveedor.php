<?php 
    require_once 'proveedor\proveedorpdo.php';
    $pdo = new proveedorPDO();
    $p = $pdo->getAll();
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null ;
    if($mensaje == 1){
        echo'<script type="text/javascript">
                alert("Exito al cargar");
             </script>';
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head> 

    <body>
        
        <div>
            <?php include 'includes\navbar.php'?>
        </div>
        <div class="container">
        <!-- botones de funcines -->
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-proveedor.php">Cargar Nuevo proveedor</a>
        </div>
        <div class="container">
        <!-- tabla de los semis -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Año</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($p as $proveedor){
                    ?>
                    <tr>
                        <td><?php echo $proveedor->Cuit;?></td>
                        <td><?php echo $proveedor->Nombre; ?></td>
                        <td><?php echo $proveedor->Telefono;?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <?php include 'includes\footer.php'?>
        </div>
    </body>
</html>