<?php
require 'controllers/LandingController.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="JahitGo merupakan platform ....">
    <meta name="keywords" content="JahitGo, Jahit, Indonesia, Fashion">
    <meta name="author" content="JahitGo Team">
    <title><?php echo isset($pageTitle) ? $pageTitle . " - JahitGo" : "JahitGo"; ?></title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="<?= $BASE_URL; ?>/global.css">
</head>

<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-14">
            <h1 class="text-2xl font-bold text-indigo-600">JahitGo</h1>
            <nav class="space-x-8 flex items-center">
                <a href="#features" class="text-gray-600 hover:text-indigo-600">Fitur</a>
                <a href="views/search" class="text-gray-600 hover:text-indigo-600">Cari</a>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="views/home/" class="bg-indigo-600 text-white px-4 py-1.5 rounded-lg hover:bg-indigo-700 border-[3px] border-indigo-600 hover:border-indigo-700">Dashboard</a>
                <?php else: ?>
                    <div class="space-x-1">
                        <a href="views/signin" class="text-indigo-600 hover:text-indigo-700 border-[3px] rounded-lg border-indigo-600 hover:border-indigo-700 px-4 py-1.5">Masuk</a>
                        <a href="views/signup" class="bg-indigo-600 text-white px-4 py-1.5 rounded-lg hover:bg-indigo-700 border-[3px] border-indigo-600 hover:border-indigo-700">Daftar</a>
                    </div>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-indigo-50 pb-40 pt-20 md:pb-40 md:pt-32">
        <!-- <div class="absolute inset-0 before:content-[''] before:absolute before:inset-0 before:bg-gradient-to-r before:from-indigo-500 before:via-purple-500 before:to-pink-500 before:opacity-20 z-0"></div> -->
        <div class="relative z-10 max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-indigo-700 mb-4 md:text-5xl lg:text-6xl">Jahit Kebutuhanmu, Temukan Penjahit Terbaik</h2>
            <p class="text-lg text-gray-600 mb-6">Platform yang mempertemukan penjahit profesional dan pelanggan dalam satu tempat mudah dan cepat.</p>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="views/home/" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full text-lg hover:bg-indigo-700">Ke Dashboard</a>
            <?php else: ?>
                <a href="views/signup" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full text-lg hover:bg-indigo-700">Gabung Sekarang</a>
            <?php endif; ?>
        </div>
    </section>

    <div class="h-24 bg-gradient-to-t from-white to-indigo-50"></div>

    <!-- Features -->
    <section id="features" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Fitur Unggulan</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-semibold mb-2">Cari Penjahit Terdekat</h4>
                    <p class="text-gray-600">Gunakan fitur pencarian untuk menemukan penjahit terpercaya di sekitar lokasi Anda.</p>
                </div>
                <div class="p-6 border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-semibold mb-2">Pesan & Jadwalkan</h4>
                    <p class="text-gray-600">Buat permintaan jahit dengan mudah, atur jadwal dan pantau proses secara real-time.</p>
                </div>
                <div class="p-6 border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-semibold mb-2">Ulasan & Rating</h4>
                    <p class="text-gray-600">Berikan dan baca ulasan dari pengguna lain untuk memilih penjahit terbaik.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="h-24 bg-gradient-to-b from-white to-indigo-600"></div>

    <!-- Call to Action -->
    <section class="bg-indigo-600 text-white pb-8 pt-16">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Sudah Siap Memulai?</h3>
            <p class="text-lg mb-6">Gabung sebagai pelanggan atau penjahit dan jadilah bagian dari komunitas JahitGo.</p>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="views/home/" class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">Ke Dashboard</a>
            <?php else: ?>
                <a href="views/signup" class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">Daftar Sekarang</a>
            <?php endif; ?>
        </div>
    </section>

    <div class="h-24 bg-gradient-to-t from-gray-100 to-indigo-600"></div>

    <!-- Footer -->
    <footer class="bg-gray-100 pb-6 pt-16">
        <div class="max-w-6xl mx-auto px-4 text-center text-sm text-gray-600">
            &copy; <?= date('Y') ?> JahitGo. All rights reserved.
        </div>
    </footer>
</body>

</html>
