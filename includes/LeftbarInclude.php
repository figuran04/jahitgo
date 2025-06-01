<?php
$currentPath = trim($_SERVER['REQUEST_URI'], '/'); // hasil: jahitgo/views/chat
$pathParts = explode('/', $currentPath);
$currentRoute = $pathParts[2] ?? ''; // 'chat' jika ada, defaultnya ''
?>



<!-- Top Menu -->
<div>
    <ul class="flex flex-col items-center xl:items-start">
        <li class="<?= $currentRoute === 'home' ? 'border-e-white bg-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all border-w-4 border-e-4 border-transparent w-full">
            <a class="flex gap-2 items-center px-3 py-3" href="../home">
                <i class="<?= $currentRoute === 'home' ? 'ph-fill' : 'ph-bold' ?> ph-house text-3xl"></i>
                <p class="hidden lg:hidden xl:block">Home</p>
            </a>
        </li>
        <li class="<?= $currentRoute === 'chat' ? 'border-e-white bg-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all border-w-4 border-e-4 border-transparent w-full">
            <a class="flex gap-2 items-center px-3 py-3" href="../chat">
                <i class="<?= $currentRoute === 'chat' ? 'ph-fill' : 'ph-bold' ?> ph-chat text-3xl"></i>
                <p class="hidden lg:hidden xl:block">Chat</p>
            </a>
        </li>
        <li class="<?= $currentRoute === 'search' ? 'border-e-white bg-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all border-w-4 border-e-4 border-transparent w-full">
            <a class="flex gap-2 items-center px-3 py-3" href="../search">
                <i class="<?= $currentRoute === 'search' ? 'ph-fill' : 'ph-bold' ?> ph-magnifying-glass text-3xl"></i>
                <p class="hidden lg:hidden xl:block">Search</p>
            </a>
        </li>
    </ul>
</div>

<!-- Bottom User Info -->
<div>
    <ul class="flex flex-col items-center xl:items-start">
        <li class="<?= $currentRoute === 'setting' ? 'border-e-white bg-[var(--primary-hover)]' : 'hover:bg-[var(--primary-hover)]' ?> transition-all border-w-4 border-e-4 border-transparent w-full">
            <a class="flex gap-2 items-center px-3 py-3" href="../setting">
                <i class="<?= $currentRoute === 'setting' ? 'ph-fill' : 'ph-bold' ?> ph-gear text-3xl"></i>
                <p class="hidden lg:hidden xl:block">Setting</p>
            </a>
        </li>
    </ul>
</div>
