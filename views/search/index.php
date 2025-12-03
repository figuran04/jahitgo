<?php
require '../../controllers/SearchController.php';
$subscribes = [
    [
        'title' => 'Join Our Community',
        'description' => 'Sign up for our newsletter for exclusive content.',
    ]
];
$pageTitle = "Cari";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<h1 class="text-2xl font-bold">Pencarian</h1>
<div class="border border-gray-300 rounded-lg flex items-center p-2 space-x-3">
    <i class="ph ph-gps-fix text-3xl bg-white rounded-lg p-2"></i>
    <p>Cari di lokasi sekitar saya</p>
</div>
<div class="border-y-2 p-4 flex space-x-4 border-gray-300">
    <p>Semua</p>
    <p class="underline">Kampus</p>
</div>
<p class="text-xl font-bold">Pencarian Populer</p>
<div class="flex flex-wrap gap-2">
    <span class="border border-gray-300 rounded-full py-2 px-4">UGM</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">UNPAD Jatinangor</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">Stand Jakarta</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">UNAIR</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">UB</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">UNY</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">UI</span>
    <span class="border border-gray-300 rounded-full py-2 px-4">Untidar</span>
</div>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
