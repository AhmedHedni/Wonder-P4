<?php
/** config for home template **/

$title = get_the_title();
$content = get_the_content();

$arguments = ['post_type' => 'reviews', 'numberposts' => 2, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$listofReviews = get_posts($arguments);    


?>



<ul>
    <?php foreach($listofReviews as $review): ?>
    <li><?php echo $review->post_title;?></li>
    <a href="<?php echo get_field('url',$review->ID)?>">klik hier voor de website</a>
    <?php endforeach; ?>
</ul>    
  

