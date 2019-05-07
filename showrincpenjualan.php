<?php
    class rincpenjualan{
		public $idrincpenjualan=[];
        public $idpenjualan=[];
        public $idbarang=[];
        public $qty=[];
        public $hjual=[];
		private $cols=array("idrincpenjualan","idpenjualan","idbarang","qty","hjual");
        private $tabel="rincpenjualan";

        function __construct(){
        }

        public function rincpenjualan(){
            include "koneksi.php";
            $query="select * from rincpenjualan";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idrincpenjualan","idpenjualan","idbarang","qty","hjual");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }

        private function addrincpenjualan(){

        }
        public function showrincpenjualan(){
            $coun=count($this->idrincpenjualan);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idrincpenjualan</th><th>idpenjualan</th><th>idbarang</th><th>qty</th><th>hjual</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idrincpenjualan[$i]."</td><td>".$this->idpenjualan[$i]."</td><td>".$this->idbarang[$i]."</td><td>".$this->qty[$i]."</td><td>".
                $this->hjual[$i]."</td></tr>";
            }
            echo "</table>";
        }
    }

    $rincpenjualan=new rincpenjualan();
    $rincpenjualan->getrincpenjualan();
    $rincpenjualan->showrincpenjualan();
?>