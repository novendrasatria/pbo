<?php
class master{
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
    }
}


private function add(){

}
public function show(){
    $coun=count($this->id);
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
        echo "<td><a href='".$this->tabel.".php?indeks=".$i."'>Pilih</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
public function edit($indeks){
    $coun=count($this->id);
    echo "<hr/><table>";
    
    for($co=0;$co<count($this->cols);$co++){
        echo "<tr>";
        $value=$this->cols[$co];
        echo "<td>".$this->cols[$co]."</td><td>:</td><td><input type='text' value='".$this->$value[$indeks]."'/></td>";
        echo "</tr>";
    }
    echo "</table>";
}
}

?>