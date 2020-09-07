<?php 
    require_once 'C:\xampp\htdocs\pp2\bd\choferespdo.php';
    $pdo = new choferPDO();
    $c = $pdo->getAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head> 

    <body>
        
        <div>
            <?php include 'C:\xampp\htdocs\pp2\includes\navbar.php'?>
        </div>
        <div class="container">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary">Primary</button>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>cuil</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>fdsf</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($c as $chofer){
                    ?>
                    <tr>
                        <td><?php echo $chofer->cuil;?></td>
                        <td><?php echo $chofer->nombre; ?></td>
                        <td><?php echo $chofer->apellido;?></td>
                        <td><?php echo $chofer->telefono;?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <?php include 'C:\xampp\htdocs\pp2\includes\footer.php'?>
        </div>
    </body>
</html>