<?php 
function setup_support(){
add_theme_support('custom-header');

}

add_action('after_setup_theme','setup_support');