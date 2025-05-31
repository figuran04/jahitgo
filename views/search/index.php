<?php
require '../../controllers/SearchController.php';
$pageTitle = "Cari";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<a href="#" id="a">Cari</a>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
