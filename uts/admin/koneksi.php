<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "uts";

//Membuat Koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
//cek koneksi
if (!$conn){
    die("Koneksi Gagal");
}
?>