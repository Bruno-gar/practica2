<?php
class chofer
{
    private $id_chofer = null;
    private $cuil;
    private $nombre;
    private $apellido;
    private $telefono;
    private $vencimiento_psicofisico;
    private $vencimiento_cargas_peligrosas;
    private $vencimiento_art;
    private $vencimiento_manip_alimentos;

    public function __construct ($cuil,$nombre,$apellido,$telefono,$vencimiento_psicofisico,$vencimiento_cargas_peligrosas,$vencimiento_art,$vencimiento_manip_alimentos)
    {
        $this->cuil = $cuil;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->vencimiento_psicofisico = $vencimiento_psicofisico;
        $this->vencimiento_cargas_peligrosas = $vencimiento_cargas_peligrosas;
        $this->vencimiento_art = $vencimiento_art;
        $this->vencimiento_manip_alimentos = $vencimiento_manip_alimentos;
    }

    

}


?>