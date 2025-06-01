<ul class="text-white items-center justify-around bg-[var(--primary-color)] flex md:hidden fixed bottom-0 w-full h-14 z-50">
    <!-- Home -->
    <li class="<?= $currentRoute === 'home' ? 'bg-white text-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all rounded-full">
        <a class="text-center w-20 h-12 flex items-center justify-center" href="../home">
            <i class="<?= $currentRoute === 'home' ? 'ph-fill' : 'ph-bold' ?> ph-house text-2xl"></i>
        </a>
    </li>

    <!-- Chat -->
    <li class="<?= $currentRoute === 'chat' ? 'bg-white text-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all rounded-full">
        <a class="text-center w-20 h-12 flex items-center justify-center" href="../chat">
            <i class="<?= $currentRoute === 'chat' ? 'ph-fill' : 'ph-bold' ?> ph-chat text-2xl"></i>
        </a>
    </li>

    <!-- Search -->
    <li class="<?= $currentRoute === 'search' ? 'bg-white text-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all rounded-full">
        <a class="text-center w-20 h-12 flex items-center justify-center" href="../search">
            <i class="<?= $currentRoute === 'search' ? 'ph-fill' : 'ph-bold' ?> ph-magnifying-glass text-2xl"></i>
        </a>
    </li>

    <!-- More Menu -->
    <li class="relative group" x-data="{ open: false }">
        <!-- Trigger -->
        <button
            class="text-center w-20 h-12 flex items-center justify-center cursor-pointer transition-all rounded-full"
            @click="open = !open"
            @click.away="open = false">
            <i class="ph-fill ph-dots-three-outline text-2xl"></i>
        </button>

        <!-- Dropdown Menu -->
        <ul
            class="absolute bottom-16 right-0 bg-white text-gray-700 rounded shadow-lg p-2 w-40 flex flex-col gap-2 z-50"
            x-show="open"
            x-transition
            @mouseenter="open = true"
            @mouseleave="open = false">
            <li><a href="../setting" class="hover:text-[var(--primary-hover)] block px-3 py-1">Pengaturan</a></li>
            <li><a href="../profile" class="hover:text-[var(--primary-hover)] block px-3 py-1">Profil</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><button onclick="openLogoutModal()" class="w-full text-left cursor-pointer text-red-400 hover:text-red-600 px-3 py-1">Keluar</button></li>
            <?php endif; ?>
        </ul>
    </li>
</ul>
