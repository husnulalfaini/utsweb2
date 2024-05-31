<?php
include 'koneksi.php';

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$satuan_barang = $_POST['satuan_barang'];
$harga_beli = $_POST['harga_beli'];
$status_barang = isset($_POST['status_barang']) ? 1 : 0;

mysqli_query($link, "INSERT INTO barang (kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang) VALUES ('$kode_barang', '$nama_barang', '$jumlah_barang', '$satuan_barang', '$harga_beli', '$status_barang')");

header("location:index.php");
?>
