<?php 
add_action('wp_enqueue_scripts',function(){
wp_enqueue_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" , true,null );
 wp_enqueue_style('theme-css',get_stylesheet_directory_uri() . '/css/main.css',array(),time() );
 wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/v4-font-face.min.css",true,null);
 
 wp_enqueue_script('bootstrap','"https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" ', array('jquery'), null, true );
});
function setup_support(){
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','setup_support');