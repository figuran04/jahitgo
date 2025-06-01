<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
$excludedForHeader = ['', 'index.php'];
$excludedForFooter = ['', 'index.php'];

$currentPath = trim($_SERVER['REQUEST_URI'], '/');

// Cek apakah current path cocok dengan pola tertentu
$matchesAuthOrAdmin = preg_match('#views/(signin|signup|admin)#', $currentPath);
$matchesFooterExtra = preg_match('#views/(signin|signup|admin|chat)#', $currentPath);

// Tentukan kondisi
$hideHeader = in_array($currentPath, $excludedForHeader) || $matchesAuthOrAdmin;
$hideFooter = in_array($currentPath, $excludedForFooter) || $matchesFooterExtra;


// Cek admin page
$isAdminPage = strpos($currentPath, 'admin') !== false;
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'includes/MetaInclude.php' ?>

<body class="bg-gray-50 flex flex-col">
  <?php if (!$hideHeader) include 'includes/HeaderInclude.php'; ?>
  <div class="flex">
    <?php if (!$hideHeader): ?>
      <aside class="shadow-md sticky top-0 bg-[var(--primary-color)] text-white flex-col justify-between hidden md:flex w-min">
        <?php if (!$hideHeader) include 'includes/LeftbarInclude.php'; ?>
      </aside>
    <?php endif; ?>
    <!-- Rightbar -->

    <main class="<?= !$hideHeader ? 'container mx-auto' :  'w-full' ?> flex h-screen overflow-hidden <?= !$hideHeader ? '-mt-[58px]' :  '' ?>">
      <!-- Konten Utama -->
      <div class="flex-1 overflow-y-auto custom-scroll bg-gray-50 <?= !$hideHeader ? 'mt-[58px]' :  '' ?>">
        <div class="min-h-full flex flex-col gap-4 <?= !$hideHeader ? 'p-4' :  '' ?>">
          <?= isset($content) ? $content : '<p>Page Not Found</p>'; ?>
        </div>
        <?php if (!$hideFooter) include 'includes/FooterInclude.php'; ?>
      </div>

      <!-- Rightbar -->
      <?php if (!empty($subscribes)): ?>
        <div class="w-80 overflow-y-auto custom-scroll p-4 mt-14 hidden lg:block">
          <?php include 'includes/RightbarInclude.php'; ?>
        </div>
      <?php endif; ?>
    </main>
  </div>
  <?php if (!$hideHeader) include 'includes/BottomInclude.php' ?>

  <?php include 'includes/logoutModal.php' ?>
  <script>
    function openLogoutModal() {
      document.getElementById("logoutModal").classList.remove("hidden");
      document.getElementById("logoutModal").classList.add("flex");
    }

    function closeLogoutModal() {
      document.getElementById("logoutModal").classList.remove("flex");
      document.getElementById("logoutModal").classList.add("hidden");
    }
  </script>
</body>

</html>
