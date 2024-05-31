<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($link, "DELETE FROM barang WHERE id_barang='$id'");
header("location:index.php");
?>
