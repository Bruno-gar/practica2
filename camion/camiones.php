<?php
class camion
{
    public $ID_Camion;
    public $Patente;
    public $Kilometros;
    public $Anio;
    public $Marca;
    public $Vencimiento_Tecnica;
    public $Vencimiento_Senasa;
    public $Vencimiento_Bromatologia;
    public $Vencimiento_Seguro;

    public function __construct ($idCamion,$patente,$km,$anio,$marca,$vto_tecnica,$vto_senasa,$vto_bromatologia,$vto_seguro)
    {
        $this->ID_Camion = $idCamion;
        $this->Patente = $patente;
        $this->Kilometros = $km;
        $this->Anio = $anio;
        $this->Marca = $marca;
        $this->Vencimiento_Tecnica = $vto_tecnica;
        $this->Vencimiento_Senasa = $vto_senasa;
        $this->Vencimiento_Bromatologia = $vto_bromatologia;
        $this->Vencimiento_Seguro = $vto_seguro;
    }

    public function getId(){return $this->ID_Camion;}
    public function getPatente(){return $this->Patente;}
    public function getKilometros(){return $this->Kilometros;}
    public function getAnio(){return $this->Anio;}
    public function getMarca(){return $this->Marca;}
    public function getTecnica(){return $this->Vencimiento_Tecnica;}
    public function getSenasa(){return $this->Vencimiento_Senasa;}
    public function getBromatologia(){return $this->Vencimiento_Bromatologia;}
    public function getSeguro(){return $this->Vencimiento_Seguro;}
}


?>