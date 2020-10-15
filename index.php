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
                    <div class="card">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <tr align="center">
                                    <th colspan="6" style="background-color:#eb0505;border:2px solid black;color:black;">Vencimientos Choferes</th>
                                    </tr>
                                    <tr style="background-color:#0b3772;color:white;">
                                        <th>CUIL</th>
                                        <th>Psico</th>
                                        <th>CP</th>
                                        <th>ART</th>
                                        <th>CEDA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($c as $chofer){
                                    ?>
                                    <tr>
                                        <td style="font-weight:550;color:black;"><?php echo $chofer->cuil; ?></td>
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
                    <div class="card">
                            <table class="table table-striped">
                                <thead>
                                    <tr align="center" >
                                        <th colspan="6" style="background-color:#eb0505;border:2px solid black;color:black;">Vencimientos Camiones</th>
                                    </tr>
                                    <tr style="background-color:#0b3772;color:white;">
                                        <th>Patente</th>
                                        <th>Tecnica</th>
                                        <th>Senasa</th>
                                        <th>Brom.</th>
                                        <th>Seguro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($ca as $camion){
                                    ?>
                                    <tr>
                                        <td style="font-weight:550;color:black;"><?php echo $camion->Patente; ?></td>
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
                    <div class="card">
                        <table class="table table-striped">
                            <thead>
                                <tr align="center">
                                <th colspan="6" style="background-color:#eb0505;border:2px solid black;color:black;">Vencimientos Semis</th>
                                </tr>
                                <tr style="background-color:#0b3772;color:white;">
                                    <th>Patente</th>
                                    <th>Tecnica</th>
                                    <th>Senasa</th>
                                    <th>Brom.</th>
                                    <th>Seguro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($s as $semi){
                                ?>
                                <tr>
                                    <td style="font-weight:550;color:black;"><?php echo $semi->Patente;?></td>
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