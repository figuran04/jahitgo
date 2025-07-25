<?php
require '../../config/init.php';
$url = isset($_GET['url']) ? $_GET['url'] : '';
$pageTitle = "Daftar";
ob_start();
?>

<style type="text/tailwindcss">

</style>
<div class="flex flex-col md:flex-row w-full justify-center md:min-h-screen bg-[var(--primary-color)]">
    <div class="bg-[var(--primary-color)] text-white w-full pt-4 pb-8 flex justify-center items-center">
        <a href="../../" class="flex items-center flex-col">
            <i class="ph-fill ph-yarn text-4xl md:text-8xl"></i>
            <h1 class="text-2xl md:text-3xl font-bold">JahitGo</h1>
        </a>
    </div>

    <div class="w-full md:w-2/3 md:mx-0 px-6 md:px-8 py-3 rounded-t-2xl md:rounded-none flex flex-col gap-3 md:justify-center bg-gray-50">
        <div class="flex flex-col md:flex-col xl:flex-row justify-between xl:items-center gap-3 xl:gap-0">
            <h2 class="text-[var(--primary-color)] text-2xl font-bold text-center md:text-left mt-2">Daftar Sekarang</h2>
            <p class="text-center md:text-left">Sudah punya akun? <a href="../signin<?= $url ? '?url=' . urlencode($url) : '' ?>" class="hover:text-[var(--primary-hover)]">Masuk</a></p>
        </div>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="p-4 text-red-700 bg-red-100 border border-red-300 rounded">
                <p><?= htmlspecialchars($_SESSION['error']); ?></p>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="p-4 text-green-700 bg-green-100 border border-green-300 rounded">
                <p><?= htmlspecialchars($_SESSION['success']); ?></p>
            </div>
        <?php endif; ?>
        <form action="../../controllers/auth/signup_handler.php" method="POST" class="flex flex-col gap-1">
            <input type="hidden" name="url" value="<?= htmlspecialchars($url) ?>">
            <label for="name">Nama:</label>
            <input class="border rounded border-gray-300 p-2 outline-[var(--primary-color)] w-full" type="text" id="name" name="name" placeholder="John Doe" required>

            <label for="email">Email:</label>
            <input class="border rounded border-gray-300 p-2 outline-[var(--primary-color)] w-full" type="email" id="email" name="email" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Masukkan email yang valid">

            <label for="password">Password:</label>
            <input class="border rounded border-gray-300 p-2 outline-[var(--primary-color)] w-full" type="password" id="password" name="password" required minlength="6" title="Minimal 6 karakter">

            <button class="mt-3 rounded px-4 py-2 bg-gray-100 text-gray-200 cursor-not-allowed w-full" type="submit" id="nextButton" disabled>Daftar</button>
        </form>

        <p class="text-sm">
            Dengan mendaftar, saya menyetujui <a href="#">Syarat & Ketentuan</a> serta <a href="#">Kebijakan Privasi</a>
        </p>
    </div>
</div>

<script>
    document.getElementById("name").addEventListener("input", checkFields);
    document.getElementById("email").addEventListener("input", checkFields);
    document.getElementById("password").addEventListener("input", checkFields);

    function checkFields() {
        var name = document.getElementById("name").value.trim();
        var email = document.getElementById("email").value.trim();
        var password = document.getElementById("password").value.trim();
        var nextButton = document.getElementById("nextButton");

        // Jika kedua field terisi, aktifkan tombol
        if (name !== "" && email !== "" && password !== "") {
            nextButton.disabled = false;
            nextButton.classList.add("bg-[var(--primary-color)]", "hover:bg-[var(--primary-hover)]", "text-gray-50", "cursor-pointer");
            nextButton.classList.remove("bg-gray-100", "text-gray-200", "cursor-not-allowed");
        } else {
            // Jika salah satu atau keduanya kosong, nonaktifkan tombol
            nextButton.disabled = true;
            nextButton.classList.remove("bg-[var(--primary-color)]", "hover:bg-[var(--primary-hover)]", "text-gray-50", "cursor-pointer");
            nextButton.classList.add("bg-gray-100", "text-gray-200", "cursor-not-allowed");
        }
    }
</script>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
