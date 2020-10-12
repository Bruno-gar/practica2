<?php
    require_once 'chofer\choferespdo.php';
    require_once 'semis\semispdo.php';
    require_once 'camion\camionespdo.php';
    $pdochofer = new choferPDO();
    $c = $pdochofer->getVencimientos();
    $pdocamion = new camionesPDO();
    $ca = $pdocamion->getVencimientos();
    $pdochofer = new semisPDO();
    $s = $pdochofer->getVencimientos();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head> 

    <body>
        
        <div>
            <?php include 'includes/navbar.php'?>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card" style="">
                        <div class="card-header">
                            Vencimientos choferes
                        </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>psico</th>
                                        <th>cargas</th>
                                        <th>art</th>
                                        <th>ceda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($c as $chofer){
                                    ?>
                                    <tr>
                                        <td><?php echo $chofer->nombre; ?></td>
                                        <td><?php echo $chofer->apellido;?></td>
                                        <td><?php echo $chofer->vencimiento_psicofisico;?></td>
                                        <td><?php echo $chofer->vencimiento_cargas_peligrosas;?></td>
                                        <td><?php echo $chofer->vencimiento_art;?></td>
                                        <td><?php echo $chofer->vencimiento_manip_alimentos;?></td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="">
                        <div class="card-header">
                            vencimientos camiones
                        </div>
                        <ul class="list-group list-group-flush">
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="">
                        <div class="card-header">
                            vencimientos semis
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php include 'includes/footer.php'?>
        </div>
    </body>
</html>