<?php
    class karyawan{
        public $idkaryawan=[];
        public $nama=[];
        public $alamat=[];
        public $notelepon=[];
		private $cols=array("idkaryawan","nama","alamat","notelepon");
        private $tabel="karyawan";

        function __construct(){
        }

        public function getkaryawan(){
            include "koneksi.php";
            $query="select * from karyawan";
            $hasil=mysqli_query($host,$query);
            $i=0;
            $cols=array("idkaryawan","nama","alamat","notelepon");
            while($row=mysqli_fetch_array($hasil)){
                for($a=0;$a<count($cols);$a++){
                    $col=$cols[$a];
                    $this->$col[$i]=$row[$cols[$a]];
                }
                $i++;
            }
        }


        private function addkaryawan(){

        }
        public function showkaryawan(){
            $coun=count($this->idkaryawan);
            echo "<table border=1 style='text-align:center;'>";
            echo "<tr><th>idkaryawan</th><th>nama</th><th>alamat</th><th>notelepon</th></tr>";
            for($i=0;$i<$coun;$i++){
                echo "<tr><td>".$this->idkaryawan[$i]."</td><td>".$this->nama[$i]."</td><td>".$this->alamat[$i]."</td><td>".$this->notelepon[$i]."</td><td></tr>";
            }
            echo "</table>";
        }
    }

    $karyawan=new karyawan();
    $karyawan->getkaryawan();
    $karyawan->showkaryawan();
?>