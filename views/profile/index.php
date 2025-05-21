<?php
require '../../controllers/ProfileController.php';
$pageTitle = "Profil";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<p>Halaman Profil</p>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
