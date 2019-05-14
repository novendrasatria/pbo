<?php
    class penjualan extends master{
        public $idpenjualan=[];
        public $idkaryawan=[];
        public $tglpenjualan=[];
        public $totalbiaya=[];
        private $tabel="penjualan";
		private $arr=array("idpenjualan","idkaryawan","tglpenjualan","totalbiaya");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }  
    }
    $penjualan=new penjualan();
    $penjualan->get();
    $penjualan->show();

    if(isset($_GET['indeks'])){
        $penjualan->edit($_GET['indeks']);
    }
    
?>