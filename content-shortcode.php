<?php
function styled_link_shortcode($atts) {
    $atts = shortcode_atts(array(
'style' => '<button type="text">CLick me </button>',
    'text' => 'Click me', 
    ),$atts);
    //return "hello" . ($atts['style']);
  return  $atts['style'] . " and " .$atts['text'];
  }
add_shortcode('custom_function', 'styled_link_shortcode');
