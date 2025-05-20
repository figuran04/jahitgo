<?php
$BASE = "http://localhost/jahitgo";
$BASE_URL = $BASE . "/views";
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jahitgo_db";

// Koneksi awal tanpa menentukan database
$conn = mysqli_connect($host, $user, $pass);

// Cek koneksi awal
if (!$conn) {
    die("Koneksi ke server gagal: " . mysqli_connect_error());
}

// Buat database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    // echo "Database berhasil dicek/dibuat.<br>";
} else {
    die("Gagal membuat database: " . mysqli_error($conn));
}

// Pilih database
mysqli_select_db($conn, $dbname);

// Cek apakah koneksi ke database berhasil
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Lanjutkan dengan kode lain (misalnya, cek atau buat tabel)
// echo "Koneksi ke database '$dbname' berhasil.";
