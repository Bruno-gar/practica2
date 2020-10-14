<?php
    require_once 'chofer\choferespdo.php';
    require_once 'semis\semispdo.php';
    require_once 'camion\camionespdo.php';
    $pdochofer = new choferPDO();
    $c = $pdochofer->getVencimientos();
    $pdocamion = new camionesPDO();
    $ca = $pdocamion->getVencimientos();
    $pdosemi = new semisPDO();
    $s = $pdosemi->getVencimientos();
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Patente</th>
                                        <th>tecnica</th>
                                        <th>senasa</th>
                                        <th>bromatologia</th>
                                        <th>seguro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($ca as $camion){
                                    ?>
                                    <tr>
                                        <td><?php echo $camion->Patente; ?></td>
                                        <td><?php echo $camion->Vencimiento_Tecnica;?></td>
                                        <td><?php echo $camion->Vencimiento_Senasa;?></td>
                                        <td><?php echo $camion->Vencimiento_Bromatologia;?></td>
                                        <td><?php echo $camion->Vencimiento_Seguro;?></td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="">
                        <div class="card-header">
                            vencimientos semis
                        </div>
                        <table class="table">
                        <thead>
                            <tr>
                                <th>Patente</th>
                                <th>tecnica</th>
                                <th>senasa</th>
                                <th>bromatologia</th>
                                <th>seguro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($s as $semi){
                            ?>
                            <tr>
                                <td><?php echo $semi->Patente;?></td>
                                <td><?php echo $semi->Vencimiento_Tecnica; ?></td>
                                <td><?php echo $semi->Vencimiento_Senasa;?></td>
                                <td><?php echo $semi->Vencimiento_Bromatologia;?></td>
                                <td><?php echo $semi->Vencimiento_Seguro;?></td>
                                <?php } ?>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php include 'includes/footer.php'?>
        </div>
    </body>
</html>