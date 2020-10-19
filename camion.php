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
    elseif($mensaje == 2){
        echo'<script type="text/javascript">
                alert("El camion ya existe");
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
        <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-camion.php">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg><br> <p class="botones">Agregar Camion</p>
        </a>
        </div><br>
        
        <div class="container">
        <!-- tabla de los camiones -->
        <table class="table table-striped">
                <thead class="thead-dark bg-dark">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Año</th>
                        <th>Año</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($c == 1){
                            echo "<td> No hay camiones en la base de datos</td>";
                        }
                        else{
                        foreach($c as $camion){
                    ?>
                    <tr>
                        <td><?php echo $camion->ID_Camion;?></td>
                        <td><?php echo $camion->Patente;?></td>
                        <td><?php echo $camion->Marca; ?></td>
                        <td><?php echo $camion->Anio;?></td>
                        <td><!--boton de modificar-->
                            <a role="button" href="formulario-modificacion-camion.php?ID_Camion=<?php echo $camion->ID_Camion; ?>">
                                <svg width="30px" height="22px" viewBox="0 0 16 16" class="bi bi-pen-fill icono" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </a>
                        </td>
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