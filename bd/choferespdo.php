<?php
require_once 'choferes.php';
class choferPDO
{
    private $pdo = [
        'servidor' => 'localhost',
        'usuario' => 'root',
        'password' => '',
        'baseDatos' =>'camiones'


    ];

    public function __construct()
    {
        try{
            $this->pdo = new PDO(
                "mysql:host={$this->configuracion['servidor']};
                dbname={$this->configuracion['baseDatos']};charset=utf8",
                $this->configuracion['ususario'],
                $this->configuracion['password']
            );
        }
        catch(PDOexception $e){
            die("¡error!". $e-getmessage() . "<br>");
        }

    }

    function getAll(){
        $insercion = $this->pdo->prepare("SELECT Cuil, Nombre, Apellido, Telefono, Vencimiento_Psicofisico, 
        Vencimiento_Cargas_Peligrosas, Vencimiento_Art, Vencimiento_Manip_Alimentos FROM chofer");
        $insercion->execute();
        while ($result = $insercion->fetch(PDO::FETCH_OBJ))
        {
            $c= new chofer($result->Cuil,$result->Nombre,$result->Apellido,$result->Telefono,$result->Vencimiento_Psicofisico,$result->Vencimiento_Cargas_Peligrosas,$result->Vencimiento_Art,$result->Vencimiento_Manip_Alimentos);
            $chofer[]=$c;
        }
        return $chofer;
    }

}

?>