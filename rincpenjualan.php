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

    $rincpenjualan=new rincpenjualan();
    $rincpenjualan->get();
    $rincpenjualan->show();

    if(isset($_GET['indeks'])){
        $rincpenjualan->edit($_GET['indeks']);
    }
?>