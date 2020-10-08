<?php
require_once 'choferes.php';
class choferPDO
{
    private $configuracion = [
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
                 $this->configuracion['usuario'],
                 $this->configuracion['password']
             );
        }
        catch(PDOexception $e){
            die("¡error!". $e-getmessage() . "<br>");
        }

    }
    public function insert($c){

        $insercion = $this->pdo->prepare("INSERT INTO chofer (Cuil, Nombre, Apellido, Telefono, Vencimiento_Psicofisico, 
        Vencimiento_Cargas_Peligrosas, Vencimiento_Art, Vencimiento_Manip_Alimentos) VALUES (?,?,?,?,?,?,?,?)");

        $datos = [
            $c->getCuil(),
            $c->getNombre(),
            $c->getApellido(),
            $c->getTelefono(),
            $c->getPsico(),
            $c->getCargas(),
            $c->getArt(),
            $c->getCeda()
        ];

        if($insercion-> execute($datos))
        {
            header("Location: ../chofer.php?mensaje=1");
            die();
        }
    }
    public function update($c){

        $id= $this->getidc($c);
        $n = $c->getNombre();
        $a = $c->getApellido();
        $t = $c->getTelefono();
        $ps = $c->getPsico();
        $ca = $c->getCargas();
        $ar = $c->getArt();
        $ce = $c->getCeda();
        $insercion = $this->pdo->prepare("UPDATE chofer SET Nombre = '$n', Apellido ='$a', Telefono='$t', Vencimiento_Psicofisico='$ps', 
        Vencimiento_Cargas_Peligrosas='$ca', Vencimiento_Art='$ar', Vencimiento_Manip_Alimentos='$ce'  WHERE ID_Chofer = $id");
        
        if($insercion-> execute($datos))
        {
            header("Location: ../chofer.php?mensaje=1");
            die();
        }
        else{
            echo "murio";
        }
    }

    public function getAll(){
        $insercion = $this->pdo->prepare("SELECT ID_Chofer ,Cuil, Nombre, Apellido, Telefono, Vencimiento_Psicofisico, 
        Vencimiento_Cargas_Peligrosas, Vencimiento_Art, Vencimiento_Manip_Alimentos FROM chofer");
        $insercion->execute();
        while ($result = $insercion->fetch(PDO::FETCH_OBJ))
        {
            $c= new chofer($result->ID_Chofer,$result->Cuil,$result->Nombre,$result->Apellido,$result->Telefono,$result->Vencimiento_Psicofisico,$result->Vencimiento_Cargas_Peligrosas,$result->Vencimiento_Art,$result->Vencimiento_Manip_Alimentos);
            $chofer[]=$c;
        }
        return $chofer;
    }

    public function getVencimientos(){
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

    private function getidc($c){
        $cuil = $c->getCuil();
        $insercion = $this->pdo->prepare("SELECT ID_Chofer FROM chofer where cuil ='$cuil'");
            $insercion->execute();
            if($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
               return $result->ID_Chofer;

            }
    }

}

?>