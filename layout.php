<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$currentPath = trim($_SERVER['REQUEST_URI'], '/');

// Tentukan halaman-halaman tanpa header/footer
$hideHeaderFooter =
    $currentPath === '' ||                          // /
    $currentPath === 'index.php' ||                 // /index.php
    preg_match('#views/(signin|signup|admin)#', $currentPath);

// Cek admin page
$isAdminPage = strpos($currentPath, 'admin') !== false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="JahitGo merupakan platform ....">
    <meta name="keywords" content="JahitGo, Jahit, Indonesia, Fashion">
    <meta name="author" content="JahitGo Team">
    <title><?php echo isset($pageTitle) ? $pageTitle . " - JahitGo" : "JahitGo"; ?></title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="<?= $BASE_URL; ?>/global.css">
</head>

<body class="bg-gray-50 flex">
    <?php if (!$hideHeaderFooter) include 'includes/LeftbarInclude.php'; ?>
    <div class="w-full">
        <?php if (!$hideHeaderFooter) include 'includes/HeaderInclude.php'; ?>
        <main class="container mx-auto flex h-screen overflow-hidden <?= !$hideHeaderFooter ? '-mt-14' :  '' ?>">
            <!-- Konten Utama -->
            <div class="flex-1 overflow-y-auto bg-gray-50 <?= !$hideHeaderFooter ? 'mt-14' :  '' ?>">
                <div class="min-h-full flex flex-col gap-4">
                    <?= isset($content) ? $content : '<p>Page Not Found</p>'; ?>
                    <?php if (!$hideHeaderFooter) include 'includes/FooterInclude.php'; ?>
                </div>
            </div>

            <!-- Rightbar -->
            <?php if (!$hideHeaderFooter): ?>
                <div class="w-80 overflow-y-auto bg-white border-l border-gray-200 p-4 mt-14 hidden md:block">
                    <?php include 'includes/RightbarInclude.php'; ?>
                </div>
            <?php endif; ?>
        </main>

    </div>
</body>

</html>
