<?php 
    class konsiasi extends master{
        public $idkonsiasi=[];
        public $idbarang=[];
        public $namasupplier=[];
        public $alamat=[];
        public $notelepon=[];
        private $tabel="konsiasi";
        private $arr=array("idkonsiasi","idbarang","namasupplier","alamat","notelepon");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }
        
    }
?>
