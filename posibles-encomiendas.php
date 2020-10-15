<?php 
    require_once 'proveedor\proveedorpdo.php';
    $pdo = new proveedorPDO();
    $localidad = $_POST['Localidad-Proveedor'];
    $p = $pdo->getProvedoresLocalidades($localidad);
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null ;
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
            <table class="table table-striped">
                <thead class="thead-dark bg-dark">
                    <tr>
                        <th>Cuit</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Calle</th>
                        <th>Numero</th>
                        <th>Localidad</th>
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
                        <td><?php echo $proveedor->Calle;?></td>
                        <td><?php echo $proveedor->Numero;?></td>
                        <td><?php echo $proveedor->Localidad;?></td>
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