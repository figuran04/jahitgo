<?php
$subscribes = $subscribes ?? [
    [
        'title' => 'Join Our Community',
        'description' => 'Sign up for our newsletter for exclusive content.'
    ],
];
?>

<?php if (!empty($subscribes)) : ?>
    <div class="flex flex-col gap-4">
        <?php foreach ($subscribes as $item) :
            $title = $item['title'] ?? '';
            $description = $item['description'] ?? '';
            include 'subscribeBox.php';
        endforeach; ?>
    </div>
<?php endif; ?>
