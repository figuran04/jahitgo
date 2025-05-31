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
<a href="#" id="a">Home</a>

<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet totam molestiae expedita odit accusamus officiis quibusdam sequi soluta placeat quisquam sapiente obcaecati ex cupiditate necessitatibus adipisci voluptas doloribus, quas vitae, ratione aliquid iste. Unde totam ipsa fugiat, est dolores aperiam ratione fugit quis et tempora recusandae, cum veniam voluptate inventore, libero optio culpa dolorem vitae. Autem sunt error est, minus culpa sit. Quasi pariatur aliquid ipsam rerum nam tenetur laboriosam! Omnis nisi velit fugit optio. Atque quam nostrum minima tempore suscipit praesentium quas, earum vitae quaerat harum deleniti debitis aspernatur sit voluptate incidunt recusandae, blanditiis vel ipsa consequuntur totam reprehenderit, ratione nesciunt! Facilis recusandae vero impedit placeat iure velit atque perferendis. Quibusdam repudiandae laboriosam perferendis perspiciatis eligendi ab quos beatae ea at accusantium. Et, dolor debitis quidem recusandae nihil, dolore dolorem voluptatem voluptas consectetur doloribus, aut incidunt similique architecto culpa deserunt. Quia libero maiores eius, nihil quo quam est ex necessitatibus! Minima aut, quasi cum nobis aspernatur praesentium impedit doloremque at ratione debitis saepe ducimus neque. Doloribus aliquam similique enim modi rerum dolor voluptatem, laborum aperiam natus eius cupiditate voluptas alias nostrum! Maxime commodi libero beatae maiores inventore deleniti ipsum facilis, harum mollitia? Facere maiores perspiciatis cum, numquam incidunt saepe quis delectus commodi, quia pariatur aut accusantium, illum molestiae recusandae nulla? Similique voluptatum, ut officia eos ea itaque! Est, eligendi modi? Molestiae est velit officiis obcaecati reiciendis? Aut corrupti deserunt totam architecto perspiciatis incidunt error eos, qui cum repellat sit delectus nisi ratione magnam. In culpa similique modi repellendus sequi officia aspernatur? Quas, tempora veniam, cum repellendus praesentium porro reprehenderit animi, excepturi sequi rem quia! Ipsa placeat, similique iste exercitationem pariatur totam cupiditate illo architecto labore dignissimos unde voluptatibus omnis veniam error commodi inventore ullam nihil, debitis hic in quibusdam beatae dolores! Recusandae nobis totam harum reprehenderit numquam praesentium illo.
</p>

<?php
$content = ob_get_clean();
include '../../layout.php';
?>
