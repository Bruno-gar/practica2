<?php 
    require_once 'proveedor\proveedorpdo.php';
    $pdo = new proveedorPDO();
    $p = $pdo->getLocalidades();
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : null ;
    if($mensaje == 1){
        echo'<script type="text/javascript">
                alert("Exito al cargar");
             </script>';
    }
    elseif($mensaje == 2){
        echo'<script type="text/javascript">
                alert("La empresa ya exite");
             </script>';
    }
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
                <strong>Nuevo Dador de Cargas</strong>
            </h5>
            
            <div class="table-responsive">
                <!-- Form -->
                <table class="table table">
                <form class="text-center" style="color: #757575;" action="proveedor/insertarproveedor.php" method="post">
                    <tr>
                        <td>
                             <!-- CUIT -->
                            <div class="md-form mt-3">
                                <input type="number" id="Cuit" name="Cuit-Proveedor"class="form-control" onblur="validarNumeros(this)">
                                <label for="Cuit-Proveedor">CUIT</label>
                            </div>
                        </td>
                        <td>
                            <!-- Nombre -->
                            <div class="md-form mt-3">
                                <input type="text" id="Nombre" name="Nombre-Proveedor" class="form-control" onblur="validarTexto(this)">
                                <label for="Nombre-Proveedor">Nombre</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <!-- Telefono -->
                            <div class="md-form mt-3">
                                <input type="number" id="Telefono" name="Telefono-Proveedor" class="form-control" onblur="validarNumeros(this)">
                                <label for="Telefono-Proveedor">Telefono</label>
                            </div>
                        </td>
                        <td>
                            <!-- Localidad -->
                            <div class="md-form mt-3">
                                <select class="custom-select" name="Localidad-Proveedor">
                                    <option selected>Elija la localidad</option>
                                    <?php
                                        foreach($p as $proveedor){
                                    ?>
                                    <option value="<?php echo $proveedor;?>"><?php echo $proveedor;?></option>
                                    <?php } ?>
                                </select>
                                <label for="Localidad-Proveedor">Localidad</label>
                    
                    <!-- INPUT INVISIBLE NUEVA LOCALIDAD -->
                                <input type="checkbox" name="check" id="check" value="1" OnChange="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Direccion -->
                            <div class="md-form mt-3">
                                <input type="text" id="Calle" name="Calle-Proveedor" class="form-control" onblur="validarTexto(this)">
                                <label for="Calle-Proveedor">Calle</label>
                            </div>
                        </td>
                        <td>
                            <!-- Direccion -->
                            <div class="md-form mt-3">
                                <input type="text" id="Numero" name="Numero-Proveedor" class="form-control" onblur="validarNumeros(this)">
                                <label for="Numero-Proveedor">Numero</label>
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