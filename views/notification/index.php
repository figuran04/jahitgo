<?php
require '../../controllers/NotifController.php';
$pageTitle = "Notification";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<a href="#">Notification</a>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
