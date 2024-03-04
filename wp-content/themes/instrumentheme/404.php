<?php get_header(); ?>


<div class="error-content">
<img src="<?php echo get_template_directory_uri(); ?>/images/error-outline.svg" alt="Error Icon">

<h3>404 Page Not Found</h3>
<h4>Sorry, looks like something went wrong.
Return <a>Home</a> and try searching again.</h4>

<?php 
wp_nav_menu([
'theme_location' => '404-menu'

]); ?>

</div>



  

<?php get_footer(); ?>