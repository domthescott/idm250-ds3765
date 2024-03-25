
<div class="read-more-wrapper"> 
<?php

$args = array(
    'post_type'      => 'post', 
    'posts_per_page' => 10, 
    'orderby'        => 'date', 
    'order'          => 'DESC' 
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="post-container">
            <a href="<?php the_permalink(); ?>" class="post-link">
                <img class="post-thumbnail" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                <h2><?php the_title(); ?></h2>
            </a>
        </div>
        <?php
    }
} else {
    echo 'No posts found';
}


?>

</div>