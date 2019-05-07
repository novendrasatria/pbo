<?php
    class konsiasi{
        public $idkonsiasi=[];
        public $idbarang=[];
        public $namasupplier=[];
        public $alamat=[];
        public $notelepon=[];
		private $cols=array("idkonsiasi","idbarang","namasupplier","alamat","notelepon");
        private $tabel="konsiasi";

        function __construct(){
        }

        public function getkonsiasi(){
            include "koneksi.php";
            $query="select * from konsiasi";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idkonsiasi","idbarang","namasupplier","alamat","notelepon");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }

        private function addkonsiasi(){

        }
        public function showkonsiasi(){
            $coun=count($this->idkonsiasi);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idkonsiasi</th><th>idbarang</th><th>namasupplier</th><th>alamat</th><th>notelepon</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idkonsiasi[$i]."</td><td>".$this->idbarang[$i]."</td><td>".$this->namasupplier[$i]."</td><td>".$this->alamat[$i]."</td><td>".
                $this->notelepon[$i]."</td></tr>";
            }
            echo "</table>";
        }
    }

    $konsiasi=new konsiasi();
    $konsiasi->getkonsiasi();
    $konsiasi->showkonsiasi();
?>