<?php
include "operasi.php";
    class barang extends master{
        public $idbarang=[];
        public $nama=[];
        public $satuan=[];
        public $stoktersedia=[];
        public $stokrusak=[];
        public $hbeli=[];
        public $hjual=[];
        private $arr=array("idbarang","nama","satuan","stoktersedia","stokrusak","hbeli","hjual");

        public function __construct(){
            parent::__construct($this->arr,"barang");
        }

        
    }

    $barang=new barang();
    $barang->get();
    $barang->show();

    if(isset($_GET['indeks'])){
        $barang->edit($_GET['indeks']);
    }
?>