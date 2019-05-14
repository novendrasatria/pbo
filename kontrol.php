<?php
include_once "operasi.php";
    class link{
        public $menu=array("karyawan","barang","penjualan","pembelian");
        
        public $ids;
        public $address;

        public function mainlink($ids){
            $this->ids=$ids;
            $this->address=$this->menu[$ids];
            include $this->address.".php";
        }
        public function sublink($sub){
            $obj=new $this->address();
            $obj->get();
            $obj->show($this->ids,$sub);
        }
    }
    
    

    $ids=$_GET['link'];
    $sub=$_GET['sub'];

    $objmenu=new link();
    $objmenu->mainlink($ids);
    $objmenu->sublink($sub);
?>