<?php
    require_once 'proveedor\proveedorpdo.php';
    require_once 'camion\camionespdo.php';
    require_once 'chofer\choferespdo.php';
    require_once 'semis\semispdo.php';
    $choferpdo = new choferPDO();
    $c = $choferpdo->getall();
    $camionpdo = new camionesPDO();
    $ca = $camionpdo->getall();
    $semipdo = new semisPDO();
    $s = $semipdo->getall();
    $proveedorpdo = new proveedorPDO();
    $p = $proveedorpdo->getall();
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
        
        <div> <!-- formulario de carga --> 
                        
            <div class="card" width="100%">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Nuevo Dador de Cargas</strong>
            </h5>
            
            <div class="table-responsive">
                <!-- Form -->
                <table class="table table">
                <form class="text-center" style="color: #757575;" action="encomiendas\insertarencomienda.php" method="post">
                    <tr>
                        <td>
                             <!-- Fecha -->
                            <div class="md-form mt-3">
                                <input type="date" id="fecha-encomienda" name="fecha-encomienda"class="form-control">
                                <label for="fecha-encomienda">Fecha</label>
                            </div>
                        </td>
                        <td>
                            <!-- chofer -->
                            <div class="md-form mt-3">
                            <select class="custom-select" name="chofer-encomienda">
                                    <option selected>elija un chofer</option>
                                    <?php
                                        foreach($c as $chofer){
                                    ?>
                                    <option value="<?php echo $chofer->id_chofer;?>"><?php echo $chofer->nombre;?></option>
                                    <?php } ?>
                                </select>
                                <label for="chofer-encomienda">Chofer</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <!-- camion -->
                            <div class="md-form mt-3">
                            <select class="custom-select" name="camion-encomienda">
                                    <option selected>elija un camion</option>
                                    <?php
                                        foreach($ca as $camion){
                                    ?>
                                    <option value="<?php echo $camion->ID_Camion;?>"><?php echo $camion->Patente;?></option>
                                    <?php } ?>
                                </select>
                                <label for="camion-encomienda">camion</label>
                            </div>
                        </td>
                        <td>
                            <!-- semi -->
                            <div class="md-form mt-3">
                                <select class="custom-select" name="semi-encomienda">
                                    <option selected>elija un semi</option>
                                    <?php
                                        foreach($s as $semi){
                                    ?>
                                    <option value="<?php echo $semi->ID_Semi;?>"><?php echo $semi->Patente;?></option>
                                    <?php } ?>
                                </select>
                                <label for="semi-encomienda">Semi</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- empresa -->
                            <div class="md-form mt-3">
                            <select class="custom-select" name="proveedor-encomienda">
                                    <option selected>elija una proveedor</option>
                                    <?php
                                        foreach($p as $proveedor){
                                    ?>
                                    <option value="<?php echo $proveedor->id_proveedor;?>"><?php echo $proveedor->Nombre;?></option>
                                    <?php } ?>
                                </select>
                                <label for="proveedor-encomienda">proveedor</label>
                            </div>
                        </td>
                        <td>
                            <!-- importe -->
                            <div class="md-form mt-3">
                                <input type="number" id="inporte-encomienda" name="inporte-encomienda" class="form-control">
                                <label for="inporte-encomienda">importe</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <!-- Boton para crear -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">CREAR</button>
                        </td>
                    </tr>
                </form>
                </table>
                <!-- Form -->
            </div>
            </div>
        </div>

        <div>
            <?php include 'includes/footer.php'?>
        </div>
    </body>
</html>