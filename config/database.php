<?php
$BASE = "http://localhost/jahitgo";
$BASE_URL = $BASE . "/views";

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jahitgo_db";

// Koneksi ke MySQL tanpa database
$conn = new mysqli($host, $user, $pass);

// Cek koneksi awal
if ($conn->connect_error) {
    die("Koneksi ke server gagal: " . $conn->connect_error);
}

// Buat database jika belum ada
if (!$conn->query("CREATE DATABASE IF NOT EXISTS `$dbname`")) {
    die("Gagal membuat database: " . $conn->error);
}

// Pilih database
$conn->select_db($dbname);

// Buat tabel `users` jika belum ada
$createUsersTable = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    status ENUM('active', 'blocked') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
";

if (!$conn->query($createUsersTable)) {
    die("Gagal membuat tabel users: " . $conn->error);
}
