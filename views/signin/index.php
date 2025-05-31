<?php
require_once '../../config/init.php';
$pageTitle = "Masuk";
ob_start();
?>
<style type="text/tailwindcss">

</style>
<div class="flex flex-col md:flex-row w-full justify-center md:min-h-screen bg-indigo-600">
    <div class="bg-indigo-600 text-white w-full pt-4 pb-8 flex justify-center items-center">
        <a href="../home" class="flex items-center flex-col">
            <i class="ph-fill ph-yarn text-4xl md:text-8xl"></i>
            <h1 class="text-2xl md:text-3xl font-bold">JahitGo</h1>
        </a>
    </div>

    <div class="w-full md:w-2/3 md:mx-0 px-6 md:px-8 py-3 rounded-t-2xl md:rounded-none flex flex-col gap-3 md:justify-center bg-gray-50">
        <div class="flex flex-col md:flex-col xl:flex-row justify-between xl:items-center gap-3 xl:gap-0">
            <h2 class="text-indigo-600 text-2xl font-bold text-center md:text-left mt-2">Masuk ke JahitGo</h2>
            <div class="text-center md:text-left">
                <span>Belum punya akun? </span><a href="../signup" class="hover:text-indigo-700">Daftar</a>
            </div>
        </div>

        <?php if (isset($_SESSION['error'])) : ?>
            <?php unset($_SESSION['success']); ?>
            <div class="p-4 text-red-700 bg-red-100 border border-red-300 rounded">
                <p><?= htmlspecialchars($_SESSION['error']); ?></p>
            </div>
            <?php unset($_SESSION['error']); // Menghapus error setelah ditampilkan
            ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="p-4 text-green-700 bg-green-100 border border-green-300 rounded">
                <p><?= htmlspecialchars($_SESSION['success']); ?></p>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <form action="../../controllers/auth/signin_handler.php" method="POST" class="flex flex-col w-full gap-1">
            <label for="email">Email:</label>
            <input class="border rounded border-gray-300 p-2 outline-indigo-600" type="email" id="email" name="email" placeholder="example@gmail.com" required>

            <label for="password">Password:</label>
            <input class="border rounded border-gray-300 p-2 outline-indigo-600" type="password" id="password" name="password" placeholder="********" required>

            <a href="#" class="text-right text-sm my-2 hover:text-indigo-700">Butuh bantuan?</a>
            <button class="rounded px-4 py-2 bg-gray-100 text-gray-200 cursor-not-allowed" type="submit" id="nextButton" disabled>Masuk</button>
        </form>
    </div>
</div>

<script>
    document.getElementById("email").addEventListener("input", checkFields);
    document.getElementById("password").addEventListener("input", checkFields);

    function checkFields() {
        var email = document.getElementById("email").value.trim();
        var password = document.getElementById("password").value.trim();
        var nextButton = document.getElementById("nextButton");

        // Jika kedua field terisi, aktifkan tombol
        if (email !== "" && password !== "") {
            nextButton.disabled = false;
            nextButton.classList.add("bg-indigo-600", "hover:bg-indigo-700", "text-gray-50", "cursor-pointer");
            nextButton.classList.remove("bg-gray-100", "text-gray-200", "cursor-not-allowed");
        } else {
            // Jika salah satu atau keduanya kosong, nonaktifkan tombol
            nextButton.disabled = true;
            nextButton.classList.remove("bg-indigo-600", "hover:bg-indigo-700", "text-gray-50", "cursor-pointer");
            nextButton.classList.add("bg-gray-100", "text-gray-200", "cursor-not-allowed");
        }
    }
</script>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
