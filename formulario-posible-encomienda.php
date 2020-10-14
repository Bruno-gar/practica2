<?php
    require_once 'proveedor\proveedorpdo.php';
    $proveedorpdo = new proveedorPDO();
    $localidades = $proveedorpdo->getLocalidades();
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
                <form class="text-center" style="color: #757575;" action="posibles-encomiendas.php" method="post">
                    <tr>        
                            <select class="custom-select" name="Localidad-Proveedor">
                                    <option selected>elija la localidad</option>
                                    <?php
                                        foreach($localidades as $localidad){
                                    ?>
                                    <option value="<?php echo $localidad;?>"><?php echo $localidad;?></option>
                                    <?php } ?>
                            </select>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <!-- Boton para crear -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">buscar</button>
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