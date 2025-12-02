<?php
require '../../controllers/ChatController.php';
$pageTitle = "Pesan";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<div class="flex">
    <div class="w-96 border-r-2 border-gray-200">
        <div class="w-full border-b-2 border-gray-200 px-4 py-2 flex items-center space-x-4">
            <div class="bg-gray-300 rounded-full w-12 aspect-square"></div>
            <p>pertama</p>
        </div>
        <div class="w-full border-b-2 border-gray-200 px-4 py-2 flex items-center space-x-4">
            <div class="bg-gray-300 rounded-full w-12 aspect-square"></div>
            <p>pertama</p>
        </div>
        <div class="w-full border-b-2 border-gray-200 px-4 py-2 flex items-center space-x-4">
            <div class="bg-gray-300 rounded-full w-12 aspect-square"></div>
            <p>pertama</p>
        </div>

    </div>
    <div class="w-full">
        <p>right</p>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
