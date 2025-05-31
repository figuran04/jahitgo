<?php
require '../../controllers/SettingController.php';
$pageTitle = "Setting";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<a href="#" id="a">Setting</a>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
