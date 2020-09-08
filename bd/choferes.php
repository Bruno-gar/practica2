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

    public function __construct ($cuil,$nombre,$apellido,$telefono,$vencimiento_psicofisico,$vencimiento_cargas_peligrosas,$vencimiento_art,$vencimiento_manip_alimentos)
    {
        $this->cuil = $cuil;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->vencimiento_psicofisico = $vencimiento_psicofisico;
        $this->vencimiento_cargas_peligrosas = $vencimiento_cargas_peligrosas;
        $this->vencimiento_manip_alimentos = $vencimiento_manip_alimentos;
        $this->vencimiento_art = $vencimiento_art;
    }

    

}


?>