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
    elseif($mensaje == 2){
        echo '<script type="text/javascript">
                alert("el semi ya existe")
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
            <a class="btn btn-primary btn-lg active" role="button" href="formulario-carga-semi.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-minecart-loaded" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8-1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82l1.313 7h11.17l1.313-7H1.102z"/>
                        <path fill-rule="evenodd" d="M6 1a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.552.57 2 1h-2c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638-.09.13-.194.25-.308.362H3c.13-.147.401-.432.562-.545a1.63 1.63 0 0 0 .393-.393A2.498 2.498 0 0 1 6 1z"/>
                </svg><br><p class="botones">Agregar Semi </p>
            </a>
        </div><br>
        
        <div class="container">
        <!-- tabla de los semis -->
            <table class="table table-striped">
                <thead class="thead-dark bg-dark">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Año</th>
                        <th></th>
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
                        <td align="center">
                        <a role="button" href="formulario-modificacion-semi.php?id=<?php echo $semi->ID_Semi; ?>">
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