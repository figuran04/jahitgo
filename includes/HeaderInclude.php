<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$currentPath = trim($_SERVER['REQUEST_URI'], '/');
$pathParts = explode('/', $currentPath);
$currentRoute = $pathParts[2] ?? '';
?>

<header class="bg-[#E2E6CF] sticky top-0 z-50">
    <nav class="w-full bg-[var(--primary-color)] flex justify-between text-white items-center px-4 h-[58px]">
        <ul class="font-semibold text-xl flex space-x-3 whitespace-nowrap">
            <li class="pr-3">
                <a href="../../">
                    <i class="ph-fill ph-yarn text-3xl"></i>
                </a>
            </li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li>
                    <a href="../profile">
                        <p class="rounded-full px-2 <?= $currentRoute === 'profile' ? 'bg-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all"><?= htmlspecialchars($_SESSION['user_name']) ?></p>
                    </a>
                </li>
                <li>/</li>
            <?php endif; ?>
            <li>
                <p><?= htmlspecialchars($pageTitle) ?></p>
            </li>
        </ul>
        <div class="flex w-full justify-end space-x-4 items-center">
            <ul class="flex text-white w-full max-w-md items-center h-14 relative">
                <li class="w-full px-3 py-3 relative hidden md:block">
                    <input type="text" class="w-full px-2 py-1 bg-white text-black rounded-lg">
                    <i class="ph-bold ph-magnifying-glass text-2xl px-3 py-3 absolute right-1 top-1 text-black"></i>
                </li>
            </ul>
            <ul class="flex items-center space-x-4">
                <li>
                    <a href="../notification" class="flex space-x-2 items-center">
                        <i class="ph-<?= $currentRoute === 'notification' ? 'fill' : 'bold' ?> ph-bell text-3xl"></i>
                        <p class="hidden lg:hidden xl:block">Notifikasi</p>
                    </a>
                </li>

            </ul>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <div class="space-x-1 flex items-center">
                    <a href="../signin" class="text-gray-50 hover:text-gray-200 border-[3px] rounded-lg border-gray-50 hover:border-gray-200 px-4 py-1.5">Masuk</a>
                    <a href="../signup" class="bg-gray-50 text-[var(--primary-color)] px-4 py-1.5 rounded-lg hover:bg-gray-200 border-[3px] border-gray-50 hover:border-gray-200">Daftar</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</header>
