<?php
require '../../controllers/HomeController.php';
$pageTitle = "Beranda";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<a href="#" id="a">Home</a>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
