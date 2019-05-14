<?php
    class pembelian extends master{
        public $idpembelian=[];
        public $idkaryawan=[];
        public $tglpembelian=[];
        public $totalbiaya=[];
        private $tabel="pembelian";
        private $arr=array("idpembelian","idkaryawan","tglpembelian","totalbiaya");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }
    }

    $pembelian=new pembelian();
    $pembelian->get();
    $pembelian->show();

    if(isset($_GET['indeks'])){
        $pembelian->edit($_GET['indeks']);
    }
?>