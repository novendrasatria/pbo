<?php
    class barang{
        public $idbarang=[];
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

         public function getbarang(){
            include "koneksi.php";
            $query="select * from barang";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idbarang","nama","satuan","nama","stoktersedia","stokrusak","hbeli","hjual");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }


        private function addbarang(){

        }
        public function showbarang(){
            $coun=count($this->idbarang);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idbarang</th><th>nama</th><th>satuan</th><th>stoktersedia</th><th>stokrusak</th><th>hbeli</th><th>hjual</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idbarang[$i]."</td><td>".$this->nama[$i]."</td><td>".$this->satuan[$i]."</td><td>".$this->stoktersedia[$i]."</td><td>".
                $this->stokrusak[$i]."</td><td>".$this->hbeli[$i]."</td><td>".$this->hjual[$i]."</td></tr>";
            }
            echo "</table>";
        }
    }

    $barang=new barang();
    $barang->getbarang();
    $barang->showbarang();
?>