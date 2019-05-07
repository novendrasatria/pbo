<?php
    // isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost","root","","kasir");
 
if($host){
	echo "";
}else{
	echo "koneksi gagal.<br/>";
}
?>