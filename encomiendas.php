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
            <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-encomienda.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> <p class="botones">Nueva Encomienda </p>
            </a>

            <a class="btn btn-primary btn-lg active" role="button" href="formulario-posible-encomienda.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calculator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
                </svg><p class="botones">Posibles Encomiendas</p>
            </a> 
        
        </div><br>
        
        <div class="container">
        <!-- tabla de los choferes -->
            <table class="table table-striped">
                <thead class="thead-dark bg-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Chofer</th>
                        <th>Patente Camion</th>
                        <th>Patente Semi</th>
                        <th>Empresa Proveedora</th>
                        <th>IMPORTE</th>
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