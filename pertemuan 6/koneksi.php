<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "weblanjut";

//buat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
// cek
if (!$conn)
{
    die("Koneksi Gagal :" .mysqli_connect_error()
    );
}

?>