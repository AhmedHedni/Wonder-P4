<?php
/** @var string $title */
/** @var array $krantItemCollection */
?>

<div class="news-archive">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($krantItemCollection): ?>
        <?php render('views/organisms/krant-item-list.php', compact('krantItemCollection')); ?>
    <?php endif; ?>
</div>