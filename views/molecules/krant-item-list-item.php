<?php
/** @var WP_Post $krantItem */

$categories = get_the_terms(get_post($newsItem->ID), 'krantCategory');
?>

<li>
    <strong>Titel: </strong> <?php echo $krantItem->post_title; ?>
    <ul>
        <li>
            <strong>Datum: </strong> <?php echo date('d-m-Y', strtotime($krantItem->post_date)); ?>
        </li>
        <li>
            <strong>Content: </strong> <?php echo $krantItem->post_content; ?>
        </li>
        <li>
            <strong>Categories: </strong>
            <?php render('views/organisms/category-list.php', compact('categories')); ?>
        </li>
    </ul>
</li>
