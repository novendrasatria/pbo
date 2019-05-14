<?php
class master{

    protected $id;
    private $cont=0;
    private  $cols;
    private  $tabel;

protected function __construct($arr,$tabel){
    $this->cols=$arr;
    $this->tabel=$tabel;
}

public function get(){
    include "koneksi.php";
    $query="select * from ".$this->tabel;
    $hasil=mysqli_query($host,$query);
    $i=0;
    
    while($row=mysqli_fetch_array($hasil)){
        for($a=0;$a<count($this->cols);$a++){
            $col=$this->cols[$a];
            $this->$col[$i]=$row[$this->cols[$a]];
        }
        $i++;
        $this->cont++;
    }
}


private function add(){

}

public function btn($main,$sub){
    $menu1=array("tampil","edit","hapus","tambah");
    $button=array("Tambah","Simpan","Batal");
    echo "<table>";
    for($i=0;$i<count($button);$i++){
        $statbt=0;
        if($i==0){
            $statbt=3;
            echo "<tr>";
            if($sub==1||$sub==3){
                continue;
            }
        }
        elseif($i==1){
            $statbt=31;
        }else{
            $statbt=32;
        }
        echo"<td><a href='index.php?link=".$main."&sub=".$statbt."'>$button[$i]</a></td>";
        if($sub==0&&$i==0){
            echo "</tr>";
            break;
        }
    }
    echo "</tr></table><hr/>";
}

public function show($main,$sub){
    $coun=$this->cont;
    $this->btn($main,$sub);
    echo "<table border=1 style='text-align:center;'>";
    echo "<tr>";
    for($co=0;$co<count($this->cols);$co++){
        echo "<th>".$this->cols[$co]."</th>";
    }
    echo "<th>operasi</th></tr>";
    for($i=0;$i<$coun;$i++){
        echo "<tr>";
        for($co=0;$co<count($this->cols);$co++){
            $value=$this->cols[$co];
            echo "<td>".$this->$value[$i]."</td>";
        }
        echo "<td><a href='index.php?link=".$main."&sub=1&indeks=".$i."'>Pilih</a>
            <a href='index.php?link=".$main."&sub=2&indeks=".$i."'>Hapus</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    if($sub==1){
        $this->edit($_GET['indeks']);
    }
    elseif($sub==3){
        $this->edit("");
    }
}
public function edit($indeks){
    $coun=$this->cont;
    echo "<hr/><table>";
    
    for($co=0;$co<count($this->cols);$co++){
        echo "<tr>";
        $value=$this->cols[$co];
        if($indeks==""){
            echo "<td>".$this->cols[$co]."</td><td>:</td><td><input type='text' value=''/></td>";
        }else{
            echo "<td>".$this->cols[$co]."</td><td>:</td><td><input type='text' value='".$this->$value[$indeks]."'/></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
}

?>