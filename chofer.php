<?php 
    require_once 'chofer\choferespdo.php';
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null ;
    $pdo = new choferPDO();
    $c = $pdo->getAll();
    if($mensaje == 1){
        echo'<script type="text/javascript">
            alert("Exito al cargar");
            </script>';
    }
    elseif($mensaje == 2){
        echo'<script type="text/javascript">
            alert("El chofer ya existe ");
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
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-chofer.php">Cargar Nuevo chofer</a>
        <a class="btn btn-primary btn-lg active" role="button" href="chofer/vencimientos.php">vencimientos mas cercanos</a>
        </div>
        <div class="container">
        <!-- tabla de los choferes -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Cuil</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($c as $chofer){
                    ?>
                    <tr>
                        <td><?php echo $chofer->cuil;?></td>
                        <td><?php echo $chofer->nombre; ?></td>
                        <td><?php echo $chofer->apellido;?></td>
                        <td><?php echo $chofer->telefono;?></td>
                        <td><a class="btn btn-primary btn-lg active" role="button" href="formulario-modificacion-chofer.php?cuil=<?php echo $chofer->cuil; ?>">modificar</a></td>
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