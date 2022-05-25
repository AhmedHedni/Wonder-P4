<?php
/** @var array $krantItemCollection */
?>

<ul class="news-item-list">
    <?php foreach($krantItemCollection as $krantItem): ?>
        <?php render('views/molecules/news-item-list-item.php', compact('krantItem'))?>
    <?php endforeach; ?>
</ul>
