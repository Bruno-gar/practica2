<?php 
    require_once 'encomiendas\encomiendapdo.php';
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
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-encomienda.php">Cargar encomienda</a>
        
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
                   
                </tbody>
            </table>
        </div>
        <div>
            <?php include 'includes\footer.php'?>
        </div>
    </body>
</html>