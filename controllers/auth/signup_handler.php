<?php
require_once '../../config/init.php';
require_once '../../models/UserModel.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $redirectUrl = isset($_POST['url']) ? trim($_POST['url']) : '';

    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Semua field wajib diisi.";
        header("Location: ../../views/signup" . ($redirectUrl ? "?url=$redirectUrl" : ""));
        exit;
    }

    $userModel = new UserModel($conn);

    if ($userModel->isEmailExist($email)) {
        $_SESSION['error'] = "Email sudah terdaftar.";
        header("Location: ../../views/signup" . ($redirectUrl ? "?url=$redirectUrl" : ""));
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    if ($userModel->signup($name, $email, $hashedPassword)) {
        $_SESSION['success'] = "Akun berhasil dibuat! Silakan signin.";
        header("Location: ../../views/signin" . ($redirectUrl ? "?url=$redirectUrl" : ""));
        exit;
    } else {
        $_SESSION['error'] = "Gagal mendaftar, coba lagi.";
        header("Location: ../../views/signup" . ($redirectUrl ? "?url=$redirectUrl" : ""));
        exit;
    }
}
