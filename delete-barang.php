<?php
include './koneksi.php';
$idBarang = $_GET['id_barang'];
// print_r($idBarang);
$query = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang = '$idBarang'");

header('location:./master-barang.php');
