<?php
// $db_host = "localhost" //host database
$db_host = "127.0.0.1"; // host database
$port = "3303";
$db_username = "root";
$db_password = "password";
$db_name = "company_profile";


// buat koneksi ke server mysql
$koneksi = new mysqli($db_host, $db_username, $db_password, $db_name, $port);

if ($koneksi->connect_error){
    die("Koneksi ke database gagal");
}

// echo jsavascript alert jika koneksi berhasil

//echo "<script>alert('Koneksi ke database berhasil')</script>";

?>