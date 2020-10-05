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

}

?>