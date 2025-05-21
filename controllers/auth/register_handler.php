<?php
require_once '../../config/init.php';
require_once '../../models/UserModel.php';

// Mengecek apakah request menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form dan sanitasi
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Validasi awal
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Semua field wajib diisi.";
        header("Location: ../../views/register");
        exit;
    }

    $userModel = new UserModel($conn); // Injeksi koneksi database

    // Cek apakah email sudah terdaftar
    if ($userModel->isEmailExist($email)) {
        $_SESSION['error'] = "Email sudah terdaftar.";
        header("Location: ../../views/register");
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Simpan user baru
    if ($userModel->register($name, $email, $hashedPassword)) {
        $_SESSION['success'] = "Akun berhasil dibuat! Silakan login.";
        header("Location: ../../views/login");
        exit;
    } else {
        $_SESSION['error'] = "Gagal mendaftar, coba lagi.";
        header("Location: ../../views/register");
        exit;
    }
}
