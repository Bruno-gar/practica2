<?php 
    require_once 'encomiendas\encomiendapdo.php';
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null ;
    $pdo = new encomiendaPDO();
    $e = $pdo->getAll();
    if($mensaje == 1){
        echo'<script type="text/javascript">
                alert("Exito al cargar");
             </script>';
    }
    elseif($mensaje == 2){
        echo'<script type="text/javascript">
                alert("La empresa ya exite");
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
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-encomienda.php">Cargar encomienda</a>
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-posible-encomienda.php">posibles encomiendas</a>
        
        </div>
        <div class="container">
        <!-- tabla de los choferes -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre del Chofer</th>
                        <th>Patente Camion</th>
                        <th>Patente semi</th>
                        <th>empresa proveedora</th>
                        <th>importe</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        foreach($e as $encomienda){
                    ?>
                    <tr>
                        <td><?php echo $encomienda->fecha;?></td>
                        <td><?php echo $encomienda->id_chofer; ?></td>
                        <td><?php echo $encomienda->id_camion;?></td>
                        <td><?php echo $encomienda->id_semi;?></td>
                        <td><?php echo $encomienda->id_empresa;?></td>
                        <td>$<?php echo $encomienda->importe;?></td>
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