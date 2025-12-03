<?php
require '../../controllers/NotifController.php';
$pageTitle = "Notifikasi";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<h1 class="text-2xl font-bold">Semua Notifikasi</h1>
<div class="border-b-2 border-gray-300 flex p-4 space-x-4">
    <div class="w-28 h-16 rounded-lg bg-gray-300 my-2"></div>
    <div>
        <p class="text-lg font-semibold">Pesanan diterima</p>
        <p class="text-sm line-clamp-2">Paket SPXID038065438996 dari pesanan 230630QASG7EWH</p>
        <p class="text-gray-600 text-xs">13/07/2025 13.34</p>
    </div>
</div>
<div class="border-b-2 border-gray-300 flex p-4 space-x-4">
    <div class="w-28 h-16 rounded-lg bg-gray-300 my-2"></div>
    <div>
        <p class="text-lg font-semibold">Pesanan diterima</p>
        <p class="text-sm line-clamp-2">Paket SPXID038065438996 dari pesanan 230630QASG7EWH</p>
        <p class="text-gray-600 text-xs">13/07/2025 13.34</p>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
