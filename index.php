<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Login Akses</title>
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Username Atau Password Yang Anda Masukkan Salah")';  
            echo '</script>';  
		}else if($_GET['pesan'] == "logout"){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Anda Berhasil Logout")';  
            echo '</script>';  
		}else if($_GET['pesan'] == "belum_login"){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Anda Harus Login Untuk Mengakses Halaman Ini")';  
            echo '</script>';  
		}
	}
?>
    <div class="container">
        <form action="cek_login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Masukkan Username" name="username">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Masukkan Password" name="password">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>