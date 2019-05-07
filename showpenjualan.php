<?php
    class penjualan{
        public $idpenjualan=[];
        public $idkaryawan=[];
        public $tglpenjualan=[];
        public $totalbiaya=[];
		private $cols=array("idpenjualan","idkaryawan","tglpenjualan","totalbiaya");
        private $tabel="penjualan";
		
        function __construct(){
        }

        public function getpenjualan(){
            include "koneksi.php";
            $query="select * from penjualan";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idpenjualan","idkaryawan","tglpenjualan","totalbiaya");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }

        private function addpenjualan(){

        }
        public function showpenjualan(){
            $coun=count($this->idpenjualan);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idpenjualan</th><th>idkaryawan</th><th>tglpenjualan</th><th>totalbiaya</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idpenjualan[$i]."</td><td>".$this->idkaryawan[$i]."</td><td>".$this->tglpenjualan[$i]."</td><td>".$this->totalbiaya[$i]."</td></tr>";
            }
            echo "</table>";
        }
    }

    $penjualan=new penjualan();
    $penjualan->getpenjualan();
    $penjualan->showpenjualan();
?>