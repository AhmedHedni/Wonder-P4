<?php
/*
 * Template Name: Custom
 */


$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));