<?php

class encomienda

    {
        public $id_enco;
        public $fecha;
        public $id_chofer;
        public $id_camion;
        public $id_semi;
        public $id_empresa;
        public $importe;

        public function __construct($enco,$fe,$idcho,$idcam,$idsem,$idemp,$imp)
        {
            $this->id_enco = $enco;
            $this->fecha = $fe;
            $this->id_chofer = $idcho;
            $this->id_camion = $idcam;
            $this->id_semi = $idsem;
            $this->id_empresa = $idemp;
            $this->importe = $imp;
        }

        public function getid(){return $this->id_enco;}
        public function getfecha(){return $this->fecha;}
        public function getidchofer(){return $this->id_chofer;}
        public function getidcamion(){return $this->id_camion;}
        public function getidsemi(){return $this->id_semi;}
        public function getidempresa(){return $this->id_empresa;}
        public function getimporte(){return $this->importe;}


    }   

?>