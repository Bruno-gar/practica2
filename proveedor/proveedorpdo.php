<?php
    require_once "proveedores.php"
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
        
        public function 

        public function insert($p)
        {
            $insercion = $this->pdo->prepare("INSERT INTO direccion (Codigo_postal, Localidad, Calle, Numero_Calle) VALUES (?,?,?,?);INSERT INTO empresa_destino (Cuit, Nombre, Telefono, id_Direccion ) VALUES (?,?,?,?)");
        }

    }

?>