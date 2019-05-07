<?php
    class barang{
        private $id=[];
        public $nama=[];
        public $satuan=[];
        public $stoktersedia=[];
        public $stokrusak=[];
        public $hbeli=[];
        public $hjual=[];
        private $cols=array("idbarang","nama","satuan","stoktersedia","stokrusak","hbeli","hjual");
        private $tabel="barang";

        function __construct(){
        }

        
    }

    $barang=new barang();
    $barang->getbarang();
    $barang->showbarang();

    if(isset($_GET['indeks'])){
        $barang->editbarang($_GET['indeks']);
    }
?>