<?php
require '../../controllers/SettingController.php';
$pageTitle = "Setting";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<a href="#" id="setting">Setting</a>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
