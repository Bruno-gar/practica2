<?php
    $conexion = mysqli_connect('localhost','root','','transporte'); //servidor, usuario, pw, base de datos
    if(!$conexion){
       echo '<scrpit>
            alert("Error al conectar a la base de datos");
            </script>';
    }

?>