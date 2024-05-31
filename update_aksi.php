<?php
include 'koneksi.php';

$id = $_POST['id_barang'];
$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah_barang'];
$satuan = $_POST['satuan_barang'];
$harga = $_POST['harga_beli'];
$status = isset($_POST['status_barang']) ? 1 : 0;

mysqli_query($link, "UPDATE barang SET kode_barang='$kode', nama_barang='$nama', jumlah_barang='$jumlah', satuan_barang='$satuan', harga_beli='$harga', status_barang='$status' WHERE id_barang='$id'");

header("location:index.php");
?>
