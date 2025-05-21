<?php
require '../../controllers/ChatController.php';
$pageTitle = "Pesan";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<p>Halaman Pesan</p>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
