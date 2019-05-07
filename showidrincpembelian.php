<?php
include "connect.php";
$query = mysqli_query($connection,"SELECT * FROM rincpembelian ORDER BY idrincpembelian DESC");
?>