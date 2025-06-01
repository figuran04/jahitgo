<!-- Modal logout -->
<div id="logoutModal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden z-50 transition-opacity duration-200">
    <div class="bg-white rounded-lg p-6 w-72 text-center shadow-lg scale-100 transition-transform duration-200">
        <h2 class="text-lg font-semibold text-gray-800 mb-2">Konfirmasi Keluar</h2>
        <p class="text-sm text-gray-600 mb-4">Apakah Anda yakin ingin keluar?</p>
        <div class="flex justify-between gap-4">
            <button onclick="closeLogoutModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 text-sm">Batal</button>
            <a href="../../controllers/auth/logout_handler.php" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Ya, Keluar</a>
        </div>
    </div>
</div>
