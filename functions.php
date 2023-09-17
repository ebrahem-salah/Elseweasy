<?php 

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
/**
 * Add read more the_excerpt  
 */
function read_more($more){
   return '...';
}
add_filter('excpert_more','read_more'); 

/**
 * Add Featured Thumbnails  
 */
add_theme_support('post-thumbnails');

function hema_add_style(){
   wp_enqueue_style("bootstrap-css" ,get_template_directory_uri() . '/css/bootstrap.min.css'); 
   wp_enqueue_style("fontawesome-css" ,get_template_directory_uri() . '/css/all.min.css');
   wp_enqueue_style("fontawesome-css" ,get_template_directory_uri() . '/css/fontawesome.min.css'); 
   wp_enqueue_style("main" ,get_template_directory_uri() . '/css/main.css');
     }
     
function hema_add_scripts(){
   wp_deregister_script("jquery");
   wp_register_script("jquery" , includes_url("/js/jquery/jquery.js"),array(), false  , true );
   wp_register_script('popper.min.js',includes_url('popper.min.js') );
   wp_enqueue_script("jquery"); 
   wp_enqueue_script("bootstrap-js" ,get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'), false  , true );
   wp_enqueue_script("main" ,get_template_directory_uri() . '/js/main.js',array(), false  , true ); 
   wp_enqueue_script("bootstrap-js" ,get_template_directory_uri() . '/js/bootstrap.bundle.min.js',array('jquery'), false  , true );
   wp_enqueue_script("botstrap",get_template_directory_uri() . '/js/mdp.js' ,array('jquery'), false  , true);
   wp_enqueue_script("fontawesome-js" ,get_template_directory_uri() . '/js/all.min.js');
   wp_enqueue_script("fontawesome-js" ,get_template_directory_uri() . '/js/fontawesome.min.js');
}
   function register_my_menus(){
   register_nav_menu('navmenu','Nav Menu');
   register_nav_menu('footermenu','Footer Menu');
}
   function main_sidebar(){
      register_sidebar(array(
         'name'         => 'Main Sidebar',
         'id'           => 'main-sidebar',
         'description'  => 'Main Sidebar Appear Everywhere',
         'class'        => 'main-sidebar',
         'before_widget'=> '<div class="widget-content">' ,
         'after_widget' => '</div>',
         'before_title' => '<h3 class="widget-title"> ',
         'after-title'  => '</h3>'
      ));
   }

add_action('wp_enqueue_scripts','hema_add_style');
add_action('wp_enqueue_scripts','hema_add_scripts');
add_action( 'after_setup_theme', 'register_navwalker' );
add_action('init','register_my_menus');
add_action('widgets_init','main_sidebar');


