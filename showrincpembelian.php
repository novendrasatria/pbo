<?php
    class rincpembelian{
		public $idrincpembelian=[];
        public $idpembelian=[];
        public $idbarang=[];
        public $qty=[];
        public $hbeli=[];
		private $cols=array("idrincpembelian","idpembelian","idbarang","qty","hbeli");
        private $tabel="rincpembelian";

        function __construct(){
        }

        public function rincpembelian(){
            include "koneksi.php";
            $query="select * from rincpembelian";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idrincpembelian","idpembelian","idbarang","qty","hbeli");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }

        private function addrincpembelian(){

        }
        public function showrincpembelian(){
            $coun=count($this->idrincpembelian);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idrincpembelian</th><th>idpembelian</th><th>idbarang</th><th>qty</th><th>hbeli</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idrincpembelian[$i]."</td><td>".$this->idpembelian[$i]."</td><td>".$this->idbarang[$i]."</td><td>".$this->qty[$i]."</td><td>".
                $this->hbeli[$i]."</td></tr>";
            }
            echo "</table>";
        }
    }

    $rincpembelian=new rincpembelian();
    $rincpembelian->getrincpembelian();
    $rincpembelian->showrincpembelian();
?>