<?php
// Pengaturan koneksi database MySQL bawaan Laragon
$host = "localhost";
$user = "root";
$password = "";
$database = "db_cafelist";

// Membuat koneksi menggunakan mysqli
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>