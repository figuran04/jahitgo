<?php
require 'controllers/LandingController.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/MetaInclude.php' ?>

<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-14">
            <a href="./" class="flex items-center space-x-3 text-[var(--primary-color)]">
                <i class="block md:hidden ph-fill ph-yarn text-2xl"></i>
                <h1 class="text-2xl font-bold">JahitGo</h1>
            </a>
            <div class="space-x-8 flex items-center">

                <ul class="space-x-8 flex items-center">
                    <li>
                        <a href="views/search" class="text-gray-600 hover:text-[var(--primary-color)] flex space-x-1 items-center">
                            <i class="block md:hidden ph-fill ph-magnifying-glass text-xl"></i><span class="hidden md:block">Cari</span>
                        </a>
                    </li>
                    <li>
                        <a href="#features" class="text-gray-600 hover:text-[var(--primary-color)] flex space-x-1 items-center">
                            <i class="block md:hidden ph-fill ph-hand-arrow-up text-xl"></i><span class="hidden md:block">Fitur</span>
                        </a>
                    </li>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li>
                            <a href="views/chat" class="text-gray-600 hover:text-[var(--primary-color)] flex space-x-1 items-center">
                                <i class="block md:hidden ph-fill ph-chat text-xl"></i><span class="hidden md:block">Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="views/notification" class="text-gray-600 hover:text-[var(--primary-color)] flex space-x-1 items-center">
                                <i class="block md:hidden ph-fill ph-bell text-xl"></i><span class="hidden md:block">Notification</span>
                            </a>
                        </li>
                </ul>
                <a href="views/home/" class="bg-[var(--primary-color)] text-white px-4 py-1.5 rounded-lg hover:bg-[var(--primary-hover)] border-[3px] border-[var(--primary-color)] hover:border-[var(--primary-hover)]">Dashboard</a>
            <?php else: ?>
                <div class="space-x-1 flex items-center">
                    <a href="views/signin" class="text-[var(--primary-color)] hover:text-[var(--primary-hover)] border-[3px] rounded-lg border-[var(--primary-color)] hover:border-[var(--primary-hover)] px-4 py-1.5">Masuk</a>
                    <a href="views/signup" class="bg-[var(--primary-color)] text-white px-4 py-1.5 rounded-lg hover:bg-[var(--primary-hover)] border-[3px] border-[var(--primary-color)] hover:border-[var(--primary-hover)]">Daftar</a>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-indigo-50 pb-40 pt-20 md:pb-40 md:pt-32">
        <!-- <div class="absolute inset-0 before:content-[''] before:absolute before:inset-0 before:bg-gradient-to-r before:from-[var(--primary-color)] before:via-purple-500 before:to-pink-500 before:opacity-20 z-0"></div> -->
        <div class="relative z-10 max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-[var(--primary-color)] mb-4 md:text-5xl lg:text-6xl">Jahit Kebutuhanmu, Temukan Penjahit Terbaik</h2>
            <p class="text-lg text-gray-600 mb-6">Platform yang mempertemukan penjahit profesional dan pelanggan dalam satu tempat mudah dan cepat.</p>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="views/home/" class="inline-block bg-[var(--primary-color)] text-white px-6 py-3 rounded-full text-lg hover:bg-[var(--primary-hover)]">Ke Dashboard</a>
            <?php else: ?>
                <a href="views/signup" class="inline-block bg-[var(--primary-color)] text-white px-6 py-3 rounded-full text-lg hover:bg-[var(--primary-hover)]">Gabung Sekarang</a>
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

    <div class="h-24 bg-gradient-to-b from-white to-[var(--primary-color)]"></div>

    <!-- Call to Action -->
    <section class="bg-[var(--primary-color)] text-white pb-8 pt-16">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Sudah Siap Memulai?</h3>
            <p class="text-lg mb-6">Gabung sebagai pelanggan atau penjahit dan jadilah bagian dari komunitas JahitGo.</p>

            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="views/home/" class="bg-white text-[var(--primary-color)] px-6 py-3 rounded-full font-semibold hover:bg-gray-100">Ke Dashboard</a>
            <?php else: ?>
                <a href="views/signup" class="bg-white text-[var(--primary-color)] px-6 py-3 rounded-full font-semibold hover:bg-gray-100">Daftar Sekarang</a>
            <?php endif; ?>
        </div>
    </section>

    <div class="h-24 bg-gradient-to-t from-gray-100 to-[var(--primary-color)]"></div>

    <!-- Footer -->
    <?php include 'includes/FooterInclude.php' ?>
</body>

</html>
