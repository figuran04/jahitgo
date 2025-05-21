<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<header class="bg-[#E2E6CF] shadow sticky top-0 z-50">
    <nav class="w-full bg-violet-800 flex justify-between text-white items-center px-4 h-14">
        <p class="font-semibold text-xl"><?= htmlspecialchars($pageTitle) ?></p>
        <ul class="flex items-center xl:items-start gap-1">
            <li class="flex gap-2 items-center px-3 py-3">
                <i class="ph-bold ph-bell text-3xl"></i>
                <p class="hidden lg:hidden xl:block">Notifikasi</p>
            </li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Jika sudah login -->
                <li class="flex gap-2 items-center px-3 py-3">
                    <i class="ph-bold ph-user text-3xl"></i>
                    <a href="../profile"><?= htmlspecialchars($_SESSION['user_name']) ?></a>
                </li>
                <li class="px-3 py-3">
                    <button onclick="openLogoutModal()" class="hover:underline">Keluar</button>
                </li>
            <?php else: ?>
                <!-- Jika belum login -->
                <li class="px-3 py-3"><a href="../login" class="hover:underline">Masuk</a></li>
                <li class="px-3 py-3"><a href="../register" class="hover:underline">Daftar</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<script>
    function openLogoutModal() {
        document.getElementById("logoutModal").classList.remove("hidden");
    }

    function closeLogoutModal() {
        document.getElementById("logoutModal").classList.add("hidden");
    }
</script>
