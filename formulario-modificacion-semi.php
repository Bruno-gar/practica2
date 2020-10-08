<?php 
    require_once 'semis\semispdo.php';
    $pdo = new semisPDO();
    $c = $pdo->getById($_GET['id']);
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
                <strong>Nuevo Semi</strong>
            </h5>
            
            <div class="table-responsive">
                <!-- Form -->
                <table class="table table">
                <form class="text-center" style="color: #757575;" action="semis\modificarsemi.php" method="post">
                    <tr>
                        <td>
                             <!-- Patente -->
                            <div class="md-form mt-3">
                                <input type="text" id="Patente-Semi" name="Patente-Semi" value="<?php echo $c->Patente;?>" class="form-control">
                                <label for="Patente-Semi">Patente</label>
                            </div>
                        </td>
                        <td>
                            <!-- Kilometraje -->
                            <div class="md-form mt-3">
                                <input type="number" id="Kilometros-Semi" name="Kilometros-Semi"  value="<?php echo $c->Kilometros;?>" class="form-control">
                                <label for="Kilometros-Semi">Kilometraje</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Año -->
                            <div class="md-form mt-3">
                                <input type="number" id="Año-Semi" name="Año-Semi"  value="<?php echo $c->Anio;?>" class="form-control">
                                <label for="Año-Semi">Año/Modelo</label>
                            </div>
                        </td>
                        <td>
                            <!-- Marca -->
                            <div class="md-form mt-3">
                                <input type="text" id="Marca-Semi" name="Marca-Semi" value="<?php echo $c->Marca;?>"  class="form-control">
                                <label for="Marca-Semi">Marca</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Vto Tecnica -->
                            <div class="md-form mt-3">
                                <input type="date" id="Vto-Tecnica-Semi" name="Vto-Tecnica-Semi" class="form-control">
                                <label for="Vto-Tecnica-Semi">Vencimiento Tecnica</label>
                            </div>
                        </td>
                        <td>
                            <!-- Vto SENASA -->
                            <div class="md-form mt-3">
                                <input type="date" id="Vto-Senasa-Semi" name="Vto-Senasa-Semi" class="form-control">
                                <label for="Vto-Senasa-Semi">Vencimiento SENASA</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Vto Bromatologia -->
                            <div class="md-form mt-3">
                                <input type="date" id="Vto-Bromatologia-Semi" name="Vto-Bromatologia-Semi" class="form-control">
                                <label for="Vto-Bromatologia-Semi">Vencimiento Bromatologia</label>
                            </div>
                        </td>
                        <td>
                            <!-- Vto Seguro -->
                            <div class="md-form mt-3">
                                <input type="date" id="Vto-Seguro-Semi" name="Vto-Seguro-Semi" class="form-control">
                                <label for="Vto-Seguro-Semi">Vencimiento Seguro</label>
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