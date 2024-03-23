
<?php get_header();
get_template_part('components/hero-header');
get_template_part('components/whatwedo-header');
get_template_part('components/hero-readmore');


$args = array(
    'post_type' => 'post', 
    'posts_per_page' => 10, 
    'orderby' => 'date', 
    'order' => 'DESC' 
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        // Output post title using echo
        echo '<h2>' . get_the_title() . '</h2>';
    }
} else {

    echo 'No posts found';
}

?>





<?php get_footer(); ?>