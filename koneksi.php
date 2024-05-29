<?php
//membuat koneksi

$link = mysqli_connect('localhost', 'root', '', 'inventory');

//cek koneksi
if (!$link) {
    die('Koneksi Error :' . mysqli_connect_errno() .
        '-' . mysqli_connect_error());
}

//koneksi berhasil
// echo 'Koneksi Berhasil : ' . mysqli_get_host_info($link), "<br />";
