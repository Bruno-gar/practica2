<?php 
    require_once 'camion\camionespdo.php';
    $pdo = new camionesPDO();
    $c = $pdo->getById($_GET['ID_Camion']);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="js/validaciones.js"></script>
    </head> 

    <body>
        
        <div>
            <?php include 'includes/navbar.php'?>
        </div>
        
        <div> <!-- formulario de carga --> 
                        
            <div class="card" width="100%">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Modificar Camion</strong>
            </h5>
            
            <div class="table-responsive">
                <!-- Form -->
                <table class="table table">
                <form class="text-center" style="color: #757575;" action="camion/modificarcamion.php" method="post">
                    <tr>
                        <td>
                             <!-- Patente -->
                            <div class="md-form mt-3">
                                <input type="text" id="Patente-Camion" readonly name="Patente-Camion" readonly value="<?php echo $c->Patente ;?>"  class="form-control">
                                <label for="Patente-Camion">Patente</label>
                            </div>
                        </td>
                        <td>
                            <!-- Kilometraje -->
                            <div class="md-form mt-3">
                                <input type="number" id="Kilometros-Camion" readonly name="Kilometros-Camion" readonly value="<?php echo $c->Kilometros; ?>" class="form-control">
                                <label for="Kilometros-Camion">Kilometraje</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Año -->
                            <div class="md-form mt-3">
                                <input type="number" id="Año-Camion" readonly name="Año-Camion" readonly value="<?php echo $c->Anio; ?>" class="form-control">
                                <label for="Año-Camion">Año/Modelo</label>
                            </div>
                        </td>
                        <td>
                            <!-- Marca -->
                            <div class="md-form mt-3">
                                <input type="text" id="Marca-Camion" readonly name="Marca-Camion" readonly value="<?php echo $c->Marca;?>" class="form-control">
                                <label for="Marca-Camion">Marca</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Vto Tecnica -->
                            <div class="md-form mt-3">
                                <input type="date" id="TECNICA" name="Vto-Tecnica-Camion" class="form-control" onblur="validarFechas(this)">
                                <label for="Vto-Tecnica-Camion">Vencimiento Tecnica</label>
                            </div>
                        </td>
                        <td>
                            <!-- Vto SENASA -->
                            <div class="md-form mt-3">
                                <input type="date" id="SENASA" name="Vto-Senasa-Camion" class="form-control" onblur="validarFechas(this)">
                                <label for="Vto-Senasa-Camion">Vencimiento SENASA</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Vto Bromatologia -->
                            <div class="md-form mt-3">
                                <input type="date" id="Bromatologia"  name="Vto-Bromatologia-Camion" class="form-control" onblur="validarFechas(this)">
                                <label for="Vto-Bromatologia-Camion">Vencimiento Bromatologia</label>
                            </div>
                        </td>
                        <td>
                            <!-- Vto Seguro -->
                            <div class="md-form mt-3">
                                <input type="date" id="Seguro" name="Vto-Seguro-Camion" class="form-control" onblur="validarFechas(this)">
                                <label for="Vto-Seguro-Camion">Vencimiento Seguro</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <!-- Boton para crear -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit"> Guardar </button>
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