<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$currentPath = trim($_SERVER['REQUEST_URI'], '/');
$hideHeaderFooter = preg_match('#views/(login|register|admin)#', $currentPath);
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

<body class="bg-gray-200">
    <main class="container mx-auto flex items-start">
        <?php if (!$hideHeaderFooter) include 'includes/LeftbarInclude.php'; ?>
        <div class="bg-gray-50 gap-4 min-h-screen w-full">
            <?php if (!$hideHeaderFooter) include 'includes/HeaderInclude.php'; ?>
            <div class="flex flex-col gap-4 min-h-screen">
                <?= isset($content) ? $content : '<p>Page Not Found</p>'; ?>
            </div>
            <?php if (!$hideHeaderFooter) include 'includes/FooterInclude.php'; ?>
        </div>
        <?php if (!$hideHeaderFooter) include 'includes/RightbarInclude.php'; ?>
    </main>
</body>

</html>
