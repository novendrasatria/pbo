<html>
<head><title>Aplikasi Kasir</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
    
</head>
<body>
	<div id="wrapper">
		<div id="left">
			<div id="ltop">
				<div class="appname">A:APLIKASI-KASIR</div>
			</div>
			<div id="lbottom">
				<ul>
						<a href="index.php?link=0&sub=0" class="link1"><li class="link">Karyawan</li></a>
						<a href="index.php?link=1&sub=0" class="link1"><li class="link">Barang</li></a>
						<a href="index.php?link=2&sub=0" class="link1"><li class="link">Penjualan</li></a>
						<a href="index.php?link=3&sub=0" class="link1" ><li class="link">Pembelian</li></a>
				</ul>
			</div>
		</div>
		<div id="right">
			<div id="rtop">
				<div id="rtstatistic" >
                    <?php
                        if(isset($_GET['link'])){
                            
                            include "kontrol.php";
                        }
                    ?>
				</div>
				<div id="rtusername">
				</div>
			</div>

			</div>
		<div id="footer">
			@Copyright-A:2019
		</div>
	</div>
</body>
</html>