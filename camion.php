<?php 
    require_once 'camion\camionespdo.php';
    $pdo = new camionesPDO();
    $c = $pdo->getAll();
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
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-camion.php">Cargar Nuevo CAMION</a>
        </div>
        <div class="container">
        <!-- tabla de los camiones -->
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
                        foreach($c as $camion){
                    ?>
                    <tr>
                        <td><?php echo $camion->Patente;?></td>
                        <td><?php echo $camion->Marca; ?></td>
                        <td><?php echo $camion->Anio;?></td>
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