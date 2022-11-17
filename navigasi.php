<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./assets/css/navigasi.css">
</head>
<body>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
    include 'koneksi.php'
	?>
    <div class="nav-bg">
        <div class="navbar">
            <div class="countainer">
                <div class="nama">
                    <h1>SHOES SHOP</h1>
                </div>
                <div class="navigasi" id="navigasi">
                    <ul>
                        <li><a href="admin.php">Home</a></li>
                        <li><a href="master-barang.php">Master Barang</a></li>
                        <li><a href="master-suplier.php">Master Suppiler</a></li>
                    </ul>
                </div>
                <form class="pencarian">
                    <input type="search" class="cari" placeholder="cari sepatu di shoes shop">
                    <button type="submit" class="tombol" velue="Cari">Cari</button>
                </form>
                <div><a href="logout.php" style="color: white;">LOGOUT</a></div>
            </div>
        </div>
    </div>
</body>
</html>