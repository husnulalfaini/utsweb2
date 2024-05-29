<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode_barang    = $_POST['kode_barang'];
$nama_barang    = $_POST['nama_barang'];
$jumlah_barang  = $_POST['jumlah_barang'];
$satuan_barang  = $_POST['satuan_barang'];
$harga_beli     = $_POST['harga_beli'];
$status_barang  = $_POST['status_barang'];

// menginput data ke database
$result = mysqli_query($link, "insert into barang values('','$kode_barang','$nama_barang','$jumlah_barang','$satuan_barang','$harga_beli','$status_barang')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
