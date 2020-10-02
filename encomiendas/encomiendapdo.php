<?php

class encomienda

    {
        public $fecha;
        public $id_chofer;
        public $id_camion;
        public $id_semi;
        public $id_empresa;
        public $importe;

        public __construct($fe,$idcho,$idcam,$idsem,$idemp,$imp){
            $this->fecha = $fe;
            $this->id_chofer = $idcho;
            $this->id_camion = $idcam;
            $this->id_semi = $idsem;
            $this->id_empresa = $idemp;
            $this->importe = $imp;
        }



    }   



?>