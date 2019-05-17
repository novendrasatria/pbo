<?php
    class rincpenjualan extends master{
		public $idrincpenjualan=[];
        public $idpenjualan=[];
        public $idbarang=[];
        public $qty=[];
        public $hjual=[];
        private $tabel="rincpenjualan";
        private $arr=array("idrincpenjualan","idpenjualan","idbarang","qty","hjual");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }
        
    }
?>
