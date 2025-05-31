<?php
require_once '../../config/init.php';

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    // Redirect ke halaman signin
    header('Location: ../signin');
    exit;
}
