<?php
class proveedor{

    public $id_proveedor = null;
    public $Cuit;
    public $Nombre;
    public $Telefono;
    public $Calle;
    public $Numero;
    public $Localidad;

    public function __construct($cuit,$nombre,$telefono,$localidad,$calle,$numero)
    {
        $this->Cuit = $cuit;
        $this->Nombre = $nombre;
        $this->Telefono = $telefono;
        $this->Calle = $calle;
        $this->Numero= $numero;
        $this->Localidad = $localidad;

    }

    public function getCuit(){return $this->Cuit;}
    public function getNombre(){return $this->Nombre;}
    public function getTelefono(){return $this->Telefono;}
    public function getCalle(){return $this->Calle;}
    public function getNumero_calle(){return $this->Numero;}
    public function getLocalidad(){return $this->Localidad;}
}


?>