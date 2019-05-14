<?php
    class barang extends master{
        public $idbarang=[];
        public $nama=[];
        public $satuan=[];
        public $stoktersedia=[];
        public $stokrusak=[];
        public $hbeli=[];
        public $hjual=[];
        private $tabel="barang";
        private $arr=array("idbarang","nama","satuan","stoktersedia","stokrusak","hbeli","hjual");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }

        
    }
?>