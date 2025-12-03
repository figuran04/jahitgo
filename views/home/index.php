<?php
require '../../controllers/HomeController.php';
$subscribes = [
    [
        'title' => 'Join Our Community',
        'description' => 'Sign up for our newsletter for exclusive content.'
    ],
    [
        'title' => 'Stay Updated',
        'description' => 'Get the latest updates directly to your inbox.'
    ],
    [
        'title' => 'Don’t Miss Out!',
        'description' => 'Subscribe now and never miss a post.'
    ],
];
$pageTitle = "Beranda";
ob_start();
?>

<style type='text/tailwindcss'>

</style>
<div class="bg-gray-200 w-full h-52 rounded-lg"></div>
<h1 class="text-2xl font-bold">Rekomendasi Penjahit</h1>
<div class="overflow-x-auto">
    <div class="flex gap-2 py-2">
        <div class="bg-gray-300 rounded-lg w-48 h-56 flex-shrink-0 flex flex-col items-center justify-center">
            <div class="w-20 aspect-square rounded-full bg-[var(--primary-color)]"></div>
            <p class="font-bold text-xl my-2">Penjahit</p>
            <p class="text-sm">Username</p>
            <p>Alamat</p>
        </div>
        <div class="bg-gray-300 rounded-lg w-48 h-56 flex-shrink-0 flex flex-col items-center justify-center">
            <div class="w-20 aspect-square rounded-full bg-[var(--primary-color)]"></div>
            <p class="font-bold text-xl my-2">Penjahit</p>
            <p class="text-sm">Username</p>
            <p>Alamat</p>
        </div>
        <div class="bg-gray-300 rounded-lg w-48 h-56 flex-shrink-0 flex flex-col items-center justify-center">
            <div class="w-20 aspect-square rounded-full bg-[var(--primary-color)]"></div>
            <p class="font-bold text-xl my-2">Penjahit</p>
            <p class="text-sm">Username</p>
            <p>Alamat</p>
        </div>
        <div class="bg-gray-300 rounded-lg w-48 h-56 flex-shrink-0 flex flex-col items-center justify-center">
            <div class="w-20 aspect-square rounded-full bg-[var(--primary-color)]"></div>
            <p class="font-bold text-xl my-2">Penjahit</p>
            <p class="text-sm">Username</p>
            <p>Alamat</p>
        </div>
    </div>
</div>
<div class="border border-gray-300 rounded-lg p-4">
    <h class="text-xl font-bold mb-4">Daftarkan Jasa Jahit Anda di Jahitgo</h>
    <p>Gunakan Fitur dan Layanan untuk Meningkatkan Jasa Jahit Anda</p>
    <button class="rounded-full px-4 py-2 bg-[var(--secondary-color)] text-gray-200 mt-2">Pelajari lebih lanjut</button>
</div>

<a href="#" id="a">Home</a>

<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet totam molestiae expedita odit accusamus officiis quibusdam sequi soluta placeat quisquam sapiente obcaecati ex cupiditate necessitatibus adipisci voluptas doloribus, quas vitae, ratione aliquid iste. Unde totam ipsa fugiat, est dolores aperiam ratione fugit quis et tempora recusandae, cum veniam voluptate inventore, libero optio culpa dolorem vitae. Autem sunt error est, minus culpa sit. Quasi pariatur aliquid ipsam rerum nam tenetur laboriosam! Omnis nisi velit fugit optio. Atque quam nostrum minima tempore suscipit praesentium quas, earum vitae quaerat harum deleniti debitis aspernatur sit voluptate incidunt recusandae, blanditiis vel ipsa consequuntur totam reprehenderit, ratione nesciunt! Facilis recusandae vero impedit placeat iure velit atque perferendis. Quibusdam repudiandae laboriosam perferendis perspiciatis eligendi ab quos beatae ea at accusantium. Et, dolor debitis quidem recusandae nihil, dolore dolorem voluptatem voluptas consectetur doloribus, aut incidunt similique architecto culpa deserunt. Quia libero maiores eius, nihil quo quam est ex necessitatibus! Minima aut, quasi cum nobis aspernatur praesentium impedit doloremque at ratione debitis saepe ducimus neque. Doloribus aliquam similique enim modi rerum dolor voluptatem, laborum aperiam natus eius cupiditate voluptas alias nostrum! Maxime commodi libero beatae maiores inventore deleniti ipsum facilis, harum mollitia? Facere maiores perspiciatis cum, numquam incidunt saepe quis delectus commodi, quia pariatur aut accusantium, illum molestiae recusandae nulla? Similique voluptatum, ut officia eos ea itaque! Est, eligendi modi? Molestiae est velit officiis obcaecati reiciendis? Aut corrupti deserunt totam architecto perspiciatis incidunt error eos, qui cum repellat sit delectus nisi ratione magnam. In culpa similique modi repellendus sequi officia aspernatur? Quas, tempora veniam, cum repellendus praesentium porro reprehenderit animi, excepturi sequi rem quia! Ipsa placeat, similique iste exercitationem pariatur totam cupiditate illo architecto labore dignissimos unde voluptatibus omnis veniam error commodi inventore ullam nihil, debitis hic in quibusdam beatae dolores! Recusandae nobis totam harum reprehenderit numquam praesentium illo.
</p>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
