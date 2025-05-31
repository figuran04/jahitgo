<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>

<header class="bg-[#E2E6CF] shadow sticky top-0 z-50">
    <nav class="w-full bg-indigo-600 flex justify-between text-white items-center px-4 h-14">
        <p class="font-semibold text-xl"><?= htmlspecialchars($pageTitle) ?></p>
        <div class="flex w-full justify-end space-x-4 items-center">
            <ul class="flex text-white w-full max-w-md items-center h-14 relative">
                <li class="w-full px-3 py-3 relative hidden md:block">
                    <input type="text" class="w-full px-2 py-1 bg-white rounded-lg">
                    <i class="ph-bold ph-magnifying-glass text-2xl px-3 py-3 absolute right-1 top-1 text-black"></i>
                </li>
                <!-- <p class="hidden lg:hidden xl:block">Search</p> -->
            </ul>
            <ul class="flex items-center xl:items-start space-x-4">
                <li>
                    <a href="../notification" class="flex space-x-2 items-center">
                        <i class="ph-bold ph-bell text-3xl"></i>
                        <p class="hidden lg:hidden xl:block">Notifikasi</p>
                    </a>
                </li>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- Jika sudah signin -->
                    <li>
                        <a href="../profile" class="flex space-x-2 items-center">
                            <i class="ph-bold ph-user text-3xl"></i>
                            <span class="hidden md:block">
                                <?= htmlspecialchars($_SESSION['user_name']) ?>
                            </span>
                        </a>
                    </li>
                <?php else: ?>
                    <!-- Jika belum signin -->
                    <li>
                        <a href="../signin" class="text-gray-50 hover:text-gray-200 border-[3px] rounded-lg border-gray-50 hover:border-gray-200 px-4 py-1.5">Masuk</a>
                    </li>
                    <li>
                        <a href="../signup" class="bg-gray-50 text-indigo-600 px-4 py-1.5 rounded-lg hover:bg-gray-200 border-[3px] border-gray-50 hover:border-gray-200">Daftar</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
