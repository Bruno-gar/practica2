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

        public function getAll(){
            $insercion = $this->pdo->prepare("SELECT en.Fecha, ch.Nombre, ca.Patente, se.Patente, em.Nombre, en.Importe FROM encomienda as en JOIN chofer as ch on en.ID_Chofer = ch.ID_Chofer JOIN camion as ca on en.ID_Camion = ca.ID_Camion JOIN semi as se on en.ID_Semi = se.ID_Semi JOIN empresa_destino as em on en.ID_Empresa_Destino = em.ID_Empresa_Destino");
            $insercion->execute();
            while ($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
                $e= new encomienda("null",$result->Fecha,$result->Nombre,$result->Patente,$result->Patente,$result->Nombre,$result->Importe);
                $encomienda[]=$e;
            }
            if(empty($encomienda)){
                $encomienda = 1;
                return $encomienda;
            }
            else{
            return $encomienda;
            }
        }
        
    }


?>