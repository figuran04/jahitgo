<?php
require '../../controllers/ProfileController.php';
$pageTitle = "Profil";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<p>Halaman Profil</p>
<button onclick="openLogoutModal()" class="hover:underline w-min cursor-pointer text-red-400 hover:text-red-600">Keluar</button>

<script>
    function openLogoutModal() {
        document.getElementById("logoutModal").classList.remove("hidden");
    }

    function closeLogoutModal() {
        document.getElementById("logoutModal").classList.add("hidden");
    }
</script>


<?php
$content = ob_get_clean();
include '../../layout.php';
?>
