<?php if (!empty($subscribes)) : ?>
    <div class="flex flex-col gap-4">
        <?php foreach ($subscribes as $item) :
            $title = $item['title'] ?? '';
            $description = $item['description'] ?? '';
            include 'subscribeBox.php';
        endforeach; ?>
    </div>
<?php endif; ?>
