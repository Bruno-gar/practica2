<?php
    require_once "proveedores.php";
    class proveedorpdo
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

        
        public function getLocalidadId($localidad)
        {
            $insercion = $this->pdo->prepare("SELECT ID_Localidad FROM localidad where Localidad = '$localidad'");
            $insercion->execute();
            if($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
               return $result->ID_Localidad;

            }
        }

        public function insert($p)
        {
            $c = $p->getCuit();
            $insercion = $this->pdo->prepare("SELECT Cuit FROM empresa_destino where Cuit = '$c'");
            $insercion->execute();
            if( $insercion->fetch(PDO::FETCH_OBJ))
            {
                header("Location: ../proveedor.php?mensaje=2");
                    die();
            }
            else
            {
                $insercion = $this->pdo->prepare("INSERT INTO empresa_destino (Cuit, Nombre, Telefono, calle, 
                numero, ID_Localidad) VALUES (?,?,?,?,?,?)");

                $datos = [
                    $p->getCuit(),
                    $p->getNombre(),
                    $p->getTelefono(),
                    $p->getCalle(),
                    $p->getNumero_calle(),
                    $this->getLocalidadId($p->getLocalidad())
                ];

                if($insercion-> execute($datos))
                {
                    header("Location: ../proveedor.php?mensaje=1");
                    die();
                }
            }
        }

        public function getAll(){
            $insercion = $this->pdo->prepare("SELECT ed.ID_Empresa_Destino, ed.Cuit, ed.Nombre, ed.Telefono, ed.calle, ed.numero, l.localidad FROM empresa_destino as ed JOIN localidad as l on ed.ID_Localidad = l.ID_Localidad  ");
            $insercion->execute();
            while ($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
                $p= new proveedor($result->ID_Empresa_Destino,$result->Cuit,$result->Nombre,$result->Telefono,$result->calle,$result->numero,$result->localidad);
                $proveedor[]=$p;
            }
            return $proveedor;
        }
        public function getLocalidades(){
            $insercion = $this->pdo->prepare("SELECT localidad FROM localidad ");
            $insercion->execute();
            while ($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
                $p[]= $result->localidad;
                
            }
            return $p;
        }

        public function getProvedoresLocalidades($localidad)
        {
            
            $insercion = $this->pdo->prepare("SELECT ed.ID_Empresa_Destino, ed.Cuit, ed.Nombre, ed.Telefono, ed.calle, ed.numero, l.localidad FROM empresa_destino as ed JOIN localidad as l on ed.ID_Localidad = l.ID_Localidad where l.Localidad = '$localidad' ");
            $insercion->execute();
            while ($result = $insercion->fetch(PDO::FETCH_OBJ))
            {
                $p= new proveedor($result->ID_Empresa_Destino,$result->Cuit,$result->Nombre,$result->Telefono,$result->calle,$result->numero,$result->localidad);
                $proveedor[]=$p;
            }
            return $proveedor;

        }
    }

?>