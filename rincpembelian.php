<?php
    class rincpembelian extends master{
		public $idrincpembelian=[];
        public $idpembelian=[];
        public $idbarang=[];
        public $qty=[];
        public $hbeli=[];
        private $tabel="rincpembelian";
        private $arr=array("idrincpembelian","idpembelian","idbarang","qty","hbeli");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }
        
    }
?>
