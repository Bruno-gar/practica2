<?php
require_once 'semis.php';
class semisPDO
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
            die("¡error!". $e->getmessage() . "<br>");
        }

    }
    public function insert($c){

        $patente = $c->getPatente();
        $insercion = $this->pdo->prepare("SELECT Patente FROM semi where Patente = '$patente'");
        $insercion->execute();
        if( $insercion->fetch(PDO::FETCH_OBJ))
        {
            header("Location: ../semi.php?mensaje=2");
                die();
        }
        else
        {
            $insercion = $this->pdo->prepare("INSERT INTO semi (Patente, Kilometros, Anio, Marca, Vencimiento_Tecnica,
            Vencimiento_Senasa, Vencimiento_Bromatologia, Vencimiento_Seguro) VALUES (?,?,?,?,?,?,?,?)");

            $datos = [
                $c->getPatente(),
                $c->getKilometros(),
                $c->getAnio(),
                $c->getMarca(),
                $c->getTecnica(),
                $c->getSenasa(),
                $c->getBromatologia(),
                $c->getSeguro()
            ];

            if($insercion-> execute($datos))
            {
                header("Location: ../semi.php?mensaje=1");
                die();
            }
        }
    }

    public function getAll(){
        $insercion = $this->pdo->prepare("SELECT ID_Semi, Patente, Kilometros, Anio, Marca, Vencimiento_Tecnica,
        Vencimiento_Senasa, Vencimiento_Bromatologia,Vencimiento_Seguro FROM semi");
        $insercion->execute();
        while ($result = $insercion->fetch(PDO::FETCH_OBJ))
        {
            $c= new semi($result->ID_Semi,$result->Patente,$result->Kilometros,$result->Anio,$result->Marca,$result->Vencimiento_Tecnica,$result->Vencimiento_Senasa,$result->Vencimiento_Bromatologia,$result->Vencimiento_Seguro);
            $semi[]=$c;
        }
        return $semi;
    }
    public function update($semi){
        $id= $this->getids($semi);
        $te= $semi->getTecnica();
        $se= $semi->getSenasa();
        $br= $semi->getBromatologia();
        $seg= $semi->getSeguro();
        $insercion = $this->pdo->prepare("UPDATE semi SET  Vencimiento_Tecnica = $te,
        Vencimiento_Senasa = $se , Vencimiento_Bromatologia = $br , Vencimiento_Seguro = $seg WHERE ID_Semi = $id");

        if($insercion-> execute())
        {
            header("Location: ../semi.php?mensaje=1");
            die();
        }
    }

    
    private function getids($semi){
        $patente = $semi->getPatente();
        $insercion = $this->pdo->prepare("SELECT ID_Semi FROM semi where Patente ='$patente'");
            $insercion->execute();
            if($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
               return $result->ID_Semi;

            }
    }

    public function getById($id){
        $insercion = $this->pdo->prepare("SELECT ID_Semi ,Patente, Kilometros, Anio, Marca, Vencimiento_Tecnica,
        Vencimiento_Senasa, Vencimiento_Bromatologia,Vencimiento_Seguro FROM semi where ID_Semi = $id");
        $insercion->execute();
        while ($result = $insercion->fetch(PDO::FETCH_OBJ))
        {
            $c= new semi($result->ID_Semi,$result->Patente,$result->Kilometros,$result->Anio,$result->Marca,$result->Vencimiento_Tecnica,$result->Vencimiento_Senasa,$result->Vencimiento_Bromatologia,$result->Vencimiento_Seguro);
        }
        return $c;
    }
}

?>