<?php 
function theme_scripts_and_styles()
{
wp_enqueue_script('idm-main-script', get_template_directory_uri() .'/dist/scripts/main.js', [], false, ['in_footer' => true]);

wp_enqueue_style('idm-main-style', get_template_directory_uri() .'/dist/styles/main.css');

}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_theme_menus()
{

    register_nav_menus([

    'primary' => 'Primary Menu',

    'footer' => 'Footer Menu',

    '404-menu' => '404 Menu'



]);
}

add_action('init', 'register_theme_menus'); 

add_theme_support( 'post-thumbnails' ); 

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );