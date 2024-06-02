<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($link, "UPDATE barang SET jumlah_barang = jumlah_barang - 1 WHERE id_barang='$id'");
header("location:index.php");
