<?php
    require_once 'proveedorpdo.php';
class proveedor{

    public $id_proveedor = null;
    public $cuit;
    public $nombre;
    public $telefono;
    public $codigo_postal;
    public $localidad;
    public $calle;
    public $numero_calle;

    public function __construct($cuit,$nombre,$telefono,$codigo_postal,$localidad,$calle,$numero_calle)
    {
        $this->cuit = $cuit;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->codigo_postal = $codigo_postal;
        $this->localidad = $localidad;
        $this->calle = $calle;
        $this->numero_calle = $numero_calle;
    }

    public function getCuit(){return $this->cuit;}
    public function getNombre(){return $this->nombre;}
    public function getTelefono(){return $this->telefono;}
    public function getCodigo_postarl(){return $this->codigo_postal;}
    public function getLocalidad(){return $this->localidad;}
    public function getCalle(){return $this->calle;}
    public function getNumero_calle(){return $this->numero_calle;}
    public funcrion get
}


?>