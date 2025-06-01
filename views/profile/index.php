<?php
require '../../controllers/ProfileController.php';
$pageTitle = "Profil";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<p>Halaman Profil</p>
<?php if (isset($_SESSION['user_id'])): ?>
    <button onclick="openLogoutModal()" class="hover:underline w-min cursor-pointer text-red-400 hover:text-red-600">Keluar</button>
<?php else: ?>
    <a href="../signup" class="w-min whitespace-nowrap inline-block bg-[var(--primary-color)] text-white px-6 py-3 rounded-full text-lg hover:bg-[var(--primary-hover)]">Gabung Sekarang</a>
<?php endif; ?>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
