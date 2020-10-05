<?php
class chofer
{
    public $id_chofer = null;
    public $cuil;
    public $nombre;
    public $apellido;
    public $telefono;
    public $vencimiento_psicofisico;
    public $vencimiento_cargas_peligrosas;
    public $vencimiento_art;
    public $vencimiento_manip_alimentos;

    public function __construct ($idChofer,$cuil,$nombre,$apellido,$telefono,$vencimiento_psicofisico,$vencimiento_cargas_peligrosas,$vencimiento_art,$vencimiento_manip_alimentos)
    {
        $this->id_chofer = $idChofer;
        $this->cuil = $cuil;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->vencimiento_psicofisico = $vencimiento_psicofisico;
        $this->vencimiento_cargas_peligrosas = $vencimiento_cargas_peligrosas;
        $this->vencimiento_manip_alimentos = $vencimiento_manip_alimentos;
        $this->vencimiento_art = $vencimiento_art;
    }

    public function getId(){return $this->id_chofer;}
    public function getCuil(){return $this->cuil;}
    public function getNombre(){return $this->nombre;}
    public function getApellido(){return $this->apellido;}
    public function getTelefono(){return $this->telefono;}
    public function getPsico(){return $this->vencimiento_psicofisico;}
    public function getCargas(){return $this->vencimiento_cargas_peligrosas;}
    public function getArt(){return $this->vencimiento_art;}
    public function getCeda(){return $this->vencimiento_manip_alimentos;}
}


?>