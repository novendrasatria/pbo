<?php
    class pembelian{
        public $idpembelian=[];
        public $idkaryawan=[];
        public $tglpembelian=[];
        public $totalbiaya=[];
		private $cols=array("idpembelian","idkaryawan","tglpembelian","totalbiaya");
        private $tabel="pembelian";

        function __construct(){
        }

        public function getbarang(){
            include "koneksi.php";
            $query="select * from pembelian";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idpembelian","idkaryawan","tglpembelian","totalbiaya");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }

        private function addpembelian(){

        }
        public function showpembelian(){
            $coun=count($this->idpembelian);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idpembelian</th><th>idkaryawan</th><th>tglpembelian</th><th>totalbiaya</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idpembelian[$i]."</td><td>".$this->idkaryawan[$i]."</td><td>".$this->tglpembelian[$i]."</td><td>".$this->totalbiaya[$i]."</td></tr>";
            }
            echo "</table>";
        }
    }

    $pembelian=new pembelian();
    $pembelian->getpembelian();
    $pembelian->showpembelian();
?>