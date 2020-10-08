<?php 
    require_once 'semis\semispdo.php';
    $pdo = new semisPDO();
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
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-semi.php">Cargar Nuevo SEMI</a>
        </div>
        <div class="container">
        <!-- tabla de los semis -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Año</th>
                        <th>Año</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($c as $semi){
                    ?>
                    <tr>
                        <td><?php echo $semi->Patente;?></td>
                        <td><?php echo $semi->Marca; ?></td>
                        <td><?php echo $semi->Anio;?></td>
                        <td><a class="btn btn-primary btn-lg active" role="button" href="formulario-modificacion-semi.php?id=<?php echo $semi->ID_Semi; ?>">modificar</a></td>
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