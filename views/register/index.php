<?php
require '../../config/init.php';
$pageTitle = "Daftar";
ob_start();
?>

<style type="text/tailwindcss">

</style>
<h1 class="text-2xl font-bold text-center text-violet-800 mt-4"><a href="../home">JahitGo</a></h1>
<div class="flex w-full justify-center mt-20">
    <div class="w-full md:w-2/3 mx-4 px-4 py-3 rounded-lg shadow flex flex-col gap-3">
        <h2 class="text-violet-800 text-xl font-semibold text-center mt-2">Daftar Sekarang</h2>
        <p class="text-center">Sudah punya akun? <a href="../login">Masuk</a></p>
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

        <form action="../../controllers/auth/register_handler.php" method="POST" class="flex flex-col gap-1">
            <label for="name">Nama:</label>
            <input class="border rounded border-gray-300 p-2 outline-violet-800" type="text" id="name" name="name" placeholder="John Doe" required>

            <label for="email">Email:</label>
            <input class="border rounded border-gray-300 p-2 outline-violet-800" type="email" id="email" name="email" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Masukkan email yang valid">

            <label for="password">Password:</label>
            <input class="border rounded border-gray-300 p-2 outline-violet-800" type="password" id="password" name="password" required minlength="6" title="Minimal 6 karakter">

            <button class="mt-3 rounded px-4 py-2 bg-gray-100 text-gray-200 cursor-not-allowed" type="submit" id="nextButton" disabled>Daftar</button>
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
            nextButton.classList.add("bg-violet-800", "hover:bg-violet-700", "text-gray-50", "cursor-pointer");
            nextButton.classList.remove("bg-gray-100", "text-gray-200", "cursor-not-allowed");
        } else {
            // Jika salah satu atau keduanya kosong, nonaktifkan tombol
            nextButton.disabled = true;
            nextButton.classList.remove("bg-violet-800", "hover:bg-violet-700", "text-gray-50", "cursor-pointer");
            nextButton.classList.add("bg-gray-100", "text-gray-200", "cursor-not-allowed");
        }
    }
</script>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
