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
            <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-proveedor.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg><br><p class="botones">Agregar Proveedor </p>
            </a>
        </div><br>
        <div class="container">
        <!-- tabla de los semis -->
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
                    if($p == 1){
                        echo "<td>No hay proveedores registrados en la base de datos</td>";
                    }
                    else{
                        foreach($p as $proveedor){
                    ?>
                    <tr>
                        <td><?php echo $proveedor->Cuit;?></td>
                        <td><?php echo $proveedor->Nombre; ?></td>
                        <td><?php echo $proveedor->Telefono;?></td>
                        <td><?php echo $proveedor->Calle;?></td>
                        <td><?php echo $proveedor->Numero;?></td>
                        <td><?php echo $proveedor->Localidad;?></td>
                        <?php }} ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <?php include 'includes\footer.php'?>
        </div>
    </body>
</html>