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

        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-chofer.php">
            <svg width="25px" height="25" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg> <br><p class="botones">Agregar Chofer</p>
        </a>
        </div><br>
        
        <div class="container">
        <!-- tabla de los choferes -->
            <table class="table table-striped">
                <thead class="thead-dark bg-dark">
                    <tr>
                        <th>Cuil</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th></th>
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
                        <td>
                        <a role="button" href="formulario-modificacion-chofer.php?id_chofer=<?php echo $chofer->id_chofer; ?>">
                                <svg width="30px" height="22px" viewBox="0 0 16 16" class="bi bi-pen-fill icono" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </a>
                        </td>
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