<?php

$title = 'Nieuws archief';

$arguments = ['post_type' => 'krant', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$krantItemCollection = get_posts($arguments);

render('views/templates/news-archive.php', compact('title', 'krantItemCollection'));