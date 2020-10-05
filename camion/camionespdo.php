<?php
require_once 'camiones.php';
class camionesPDO
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

        $insercion = $this->pdo->prepare("INSERT INTO camion (Patente, Kilometros, Anio, Marca, Vencimiento_Tecnica,
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
            header("Location: ../camion.php?mensaje=1");
            die();
        }
    }

    public function getAll(){
        $insercion = $this->pdo->prepare("SELECT ID_Camion ,Patente, Kilometros, Anio, Marca, Vencimiento_Tecnica,
        Vencimiento_Senasa, Vencimiento_Bromatologia,Vencimiento_Seguro FROM camion");
        $insercion->execute();
        while ($result = $insercion->fetch(PDO::FETCH_OBJ))
        {
            $c= new camion($result->ID_Camion,$result->Patente,$result->Kilometros,$result->Anio,$result->Marca,$result->Vencimiento_Tecnica,$result->Vencimiento_Senasa,$result->Vencimiento_Bromatologia,$result->Vencimiento_Seguro);
            $camion[]=$c;
        }
        return $camion;
    }

}

?>