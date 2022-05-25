<?php

$title = get_the_title();
$content = get_the_content();

$sausCategories = get_the_terms(\get_post(), 'krantCategory');

//var_dump($sausCategories);

render('views/templates/news-detail.php', compact('title','content', 'krantCategories'));