<?php /* Template Name: template-sidebar */ ?>




<?php get_header(); ?>

<div class="template-sidebar-wrapper">


<div class="template-sidebar-content">
<h1 class="page-template_title">
<?php echo get_the_title(); ?>
</h1>

<div class="page-content-wrapper"> 
<div class="page-content">

<?php echo get_the_content(); ?>
</div>  
</div>

</div>


<div class="template-sidebar-sidebar">
<h4>Instrument Reviews </h4>

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
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
    }
} else {
    echo 'No posts found';
}
?>




</div>

<?php get_footer(); ?>  
</div>