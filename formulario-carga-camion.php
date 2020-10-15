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
                <strong>Nuevo Camion</strong>
            </h5>
            
            <div class="table-responsive">
                <!-- Form -->
                <table class="table table">
                <form class="text-center" style="color: #757575;" action="camion/insertarcamion.php" method="post">
                    <tr>
                        <td>
                             <!-- Patente -->
                            <div class="md-form mt-3">
                                <input type="text" id="Patente" name="Patente-Camion" class="form-control" onblur="validarTexto(this)">
                                <label for="Patente-Camion">Patente</label>
                            </div>
                        </td>
                        <td>
                            <!-- Kilometraje -->
                            <div class="md-form mt-3">
                                <input type="number" id="Kilometros" name="Kilometros-Camion" class="form-control" onblur="validarNumeros(this)">
                                <label for="Kilometros-Camion">Kilometraje</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Año -->
                            <div class="md-form mt-3">
                                <input type="number" id="Año-Modelo" name="Año-Camion" class="form-control" onblur="validarNumeros(this)">
                                <label for="Año-Camion">Año/Modelo</label>
                            </div>
                        </td>
                        <td>
                            <!-- Marca -->
                            <div class="md-form mt-3">
                                <input type="text" id="Marca" name="Marca-Camion" class="form-control" onblur="validarTexto(this)">
                                <label for="Marca-Camion">Marca</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Vto Tecnica -->
                            <div class="md-form mt-3">
                                <input type="date" id="Tecnica" name="Vto-Tecnica-Camion" class="form-control" onblur="validarFechas(this)">
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