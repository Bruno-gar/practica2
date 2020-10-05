<?php
    require_once "encomienda.php";

    class encomiendapdo{

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

        public function insert($e){

            $insercion = $this->pdo->prepare("INSERT INTO encomienda (Fecha, ID_Chofer, ID_Camion, ID_Semi, ID_Empresa_Destino, Importe) VALUES (?,?,?,?,?,?);");
    
            $datos = [
                $e->getfecha(),
                $e->getidchofer(),
                $e->getidcamion(),
                $e->getidsemi(),
                $e->getidempresa(),
                $e->getimporte()
            ];
    
            if($insercion-> execute($datos))
            {
                header("Location: ../encomiendas.php?mensaje=1");
                die();
            }
        }














        
    }


?>