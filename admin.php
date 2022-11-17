<?php include 'navigasi.php'?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/home.css">
</head>
<body>
    <?php
    $getBarang = mysqli_query($koneksi, "SELECT * FROM tb_barang");
    $getSuplier = mysqli_query($koneksi, "SELECT * FROM tb_suplier");

    $countBarang = mysqli_num_rows($getBarang);
    $countSuplier = mysqli_num_rows($getSuplier);
    ?>
<div class="atas">
    <div class="isi">
        <h3>Selamat datang,<?php echo $_SESSION['username']; ?> Di Toko Sepatu Kami</h3>
    </div>
</div>
<div class="db">
    <h3>Dasboard/Home :::</h3>
</div>
<div style="margin:0 auto 200px auto">
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4" style="margin:0 150px">
                    <div class="info-box bg-dark">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-cubes"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Barang</span>
                            <span class="info-box-number"><?= $countBarang; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <!-- <div class="clearfix hidden-md-up"></div> -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box bg-dark">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-warehouse"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Suplier</span>
                            <span class="info-box-number"><?= $countSuplier; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
 </div> 

 <?php include 'footer.php'?>
</body>
</html>